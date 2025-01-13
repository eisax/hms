# Hospital Management System


# a) HMS on local machine

## Clone a Project

- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan jwt:secret`
- **Setup .env file**
- **Run migration `php artisan migrate`**
- **Run seeder `php artisan db:seed`**
- **Create virtual host with name `local.hms.com`**
- **Run `npm install`**
- **Run `npm run dev`**

# b) HMS Docker and AWS Deployment Guide

This README provides a comprehensive guide to deploying the HMS application using Docker containers. The steps cover installation, container creation, running migrations, and application setup.

---

## Prerequisites

1. **Install Docker**:
   - Download Docker from the [official website](https://www.docker.com/).
   - Follow the installation instructions for your operating system.

2. **Verify Docker Installation**:
   ```bash
   docker --version
   ```

---

## Setting Up the Environment

### 1. Clone the Repository

```bash
git clone <repository-url>
cd hms
```

---

## MySQL Container Setup

### 1. Create the MySQL Container

**Command**:
```bash
docker-compose up -d db
```

**Details**:
- The `db` service is defined in the `docker-compose.yaml` file.
- Configuration:
  - **Image**: `mysql:8.0`
  - **Environment Variables**:
    - `MYSQL_ROOT_PASSWORD=root`
    - `MYSQL_DATABASE=hmsdb`
- The database will run on port `3306`.

### 2. Verify MySQL Container

**Command**:
```bash
docker ps
```

Look for the `mysql-docker` container in the list of running containers.

---

## Laravel Application Container Setup

### 1. Build the Application Container

**Command**:
```bash
docker-compose build app
```

This will create a container for the Laravel application based on the `Dockerfile`.

### 2. Run Database Migrations and Seeders

Run the MySQL container first, then execute the migrations:

**Command**:
```bash
docker exec -it mysql-docker bash
```

Within the MySQL container, use Tinker or Artisan:
```bash
php artisan migrate
php artisan db:seed
```

Exit the MySQL container:
```bash
exit
```

---

### 3. Start the Laravel Application Container

**Command**:
```bash
docker-compose up -d app
```

The Laravel application will now be running in the `hms-app-1` container.

---

## Accessing the Application

1. **Check Running Containers**:
   ```bash
   docker ps
   ```

   Ensure both `mysql-docker` and `hms-app-1` are running.

2. **Access the Application**:
   Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

---

## AWS Deployment

### Steps for AWS Deployment

1. **Push Images to Amazon ECR**:
   - Tag and push your Docker images to an Amazon Elastic Container Registry (ECR) repository.

2. **Create AWS ECS Cluster**:
   - Define services for `mysql-docker` and `hms-app-1`.

3. **Deploy Containers**:
   - Use the task definition in AWS ECS to start both containers.

4. **Configure Application Load Balancer**:
   - Route traffic to the `hms-app-1` container.

5. **Access Application**:
   - Visit the public DNS or URL of the load balancer.

---

## Notes

- Use `.env` for application configuration.
- Ensure security groups and networking are properly configured for AWS.

---

## Troubleshooting

- Check container logs:
  ```bash
  docker logs <container-name>
  ```
- Rebuild containers if changes are made:
  ```bash
  docker-compose build
  ```

---



# c) HMS on aws and git CI/CD 

# 1. Setup AWS Environment

## 1.1. Create an EC2 Instance

- Log in to AWS Management Console.
- Navigate to EC2 and launch an instance.
- Choose an Amazon Machine Image (AMI), such as Amazon Linux or Ubuntu.
- Select an instance type (e.g., t2.micro for testing).
- Configure instance details and security group rules (open port 22 for SSH, and port 80 for HTTP).

## 1.2. Install Required Software

After launching the EC2 instance, SSH into it and install:

- PHP
- Composer
- MySQL or any database of your choice
- Web server (Apache or Nginx)

Example (for Ubuntu):

```bash
   sudo apt update
   sudo apt install php-cli php-mbstring php-xml unzip curl nginx mysql-server composer -y
```

## 1.3. Configure Security Groups
- Allow HTTP (port 80) and SSH (port 22).
- Add HTTPS (port 443) if using SSL.

## 1.4. Create a Database
Set up a database for the Laravel application and note the credentials.


# 2. Prepare Laravel Application

## 2.1. Modify .env
- Update the database credentials and any other environment-specific variables in your .env file.

## 2.2. Install Dependencies
Ensure all dependencies are installed locally using Composer:

```bash
   composer install --optimize-autoloader --no-dev
```

## 2.3. Cache Configuration

```bash
   php artisan config:cache
   php artisan route:cache
```

# 3. Setup CI/CD with GitHub Actions

## 3.1. Create a GitHub Repository
- Push your Laravel project to a GitHub repository.

## 3.2. Add GitHub Actions Workflow
Create a .github/workflows/deploy.yml file in your repository with the following content:

```yaml

  name: Deploy Laravel to AWS

on:
  push:
    branches:
      - main  # Trigger workflow on push to the 'main' branch

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
    - name: Checkout Code
      uses: actions/checkout@v3

    - name: Set up PHP
      uses: shivammathur/setup-php@v2
      with:
        php-version: 8.1 # Update PHP version as needed
        extensions: mbstring, xml, pdo_mysql
        ini-values: post_max_size=256M, upload_max_filesize=256M
        coverage: none

    - name: Install Composer Dependencies
      run: composer install --no-dev --prefer-dist --no-progress

    - name: Deploy to EC2
      env:
        PRIVATE_KEY: ${{ secrets.EC2_PRIVATE_KEY }}
        HOST: ${{ secrets.EC2_HOST }}
        USER: ${{ secrets.EC2_USER }}
      run: |
        ssh -i "$PRIVATE_KEY" -o StrictHostKeyChecking=no $USER@$HOST << 'EOF'
        cd /var/www/html
        git pull origin main
        composer install --no-dev --prefer-dist --no-progress
        php artisan migrate --force
        php artisan config:cache
        php artisan route:cache
        sudo systemctl restart nginx
        EOF
```

## 3.3. Configure GitHub Secrets
Go to your repository on GitHub:

- Navigate to Settings > Secrets and variables > Actions.
- Add the following secrets:
- EC2_PRIVATE_KEY: The private key of your EC2 instance.
- EC2_HOST: The public IP or hostname of your EC2 instance.
- EC2_USER: The SSH username (e.g., ec2-user for Amazon Linux or ubuntu for Ubuntu).


# 4. Configure the EC2 Instance for GitHub Deployment

## 4.1. Setup Permissions
- Add the public key of the GitHub Action runner to the ~/.ssh/authorized_keys of the EC2 user.

## 4.2. Clone Laravel Project
SSH into the EC2 instance and clone your Laravel project into /var/www/html or your chosen directory:

```bash
   cd /var/www/html
   git clone <repository-url> .
   composer install
   php artisan migrate --force
```

## 4.3. Set File Permissions
Ensure Laravel has the correct file permissions:

```bash
   sudo chown -R www-data:www-data /var/www/html
   sudo chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
```

## 4.4. Configure Web Server
Set up Nginx or Apache to serve your Laravel application.

Example (Nginx):

```bash
   server {
    listen 80;
    server_name your_domain_or_ip;

    root /var/www/html/public;

    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

Restart Nginx:

```bash
   sudo systemctl restart nginx
```

# 5. Test the Deployment
- Push changes to your GitHub repository.
- Verify that the CI/CD pipeline deploys the application to the EC2 instance.


This setup ensures automatic deployment of your Laravel app to AWS EC2 whenever you push changes to the specified branch on GitHub. For scaling or additional AWS services like RDS or S3, modify the setup accordingly.




## Author

Josphat Ndhlovu