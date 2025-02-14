/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#6571ff',
        'success': '#0ac074',
        'warning': '#ffb821',
        'danger': '#f62947',
        'info': '#0099fb',
        'secondary': '#adb5bd',
        'dark': '#060917'
      }
    },
  },
  plugins: [],
}

