# Hospital Management System


<!-- - Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan jwt:secret`
- **Setup .env file**
- **Run migration `php artisan migrate`**
- **Run seeder `php artisan db:seed`**
- **Create virtual host with name `local.hms.com`**
- **Run `npm install`**
- **Run `npm run dev`** -->



# HMS Docker Deployment Guide

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

## Author

Josphat Ndhlovu

