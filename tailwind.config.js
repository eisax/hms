/** @type {import('tailwindcss').Config} */
module.exports = {
    prefix: 'tw-',
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    corePlugins: {
      preflight: false,
    },
    theme: {
      extend: {
        colors: {
          primary: {
            DEFAULT: '#FF8E4B',
            50: '#FFF8F3',
            100: '#FFEDE2',
            200: '#FFD7BC',
            300: '#FFC195',
            400: '#FFAB6E',
            500: '#FF8E4B',
            600: '#FF7018',
            700: '#E55600',
            800: '#B24300',
            900: '#7F3000'
          },
          secondary: '#909090',
          success: '#161E54',
          info: '#0dcaf0',
          warning: '#ffc107',
          danger: '#dc3545',
        },
        fontFamily: {
          sans: ['Poppins', 'sans-serif'],
        },
        transitionProperty: {
          'height': 'height',
          'spacing': 'margin, padding',
        },
        backdropBlur: {
          xs: '2px',
        }
      },
    },
    plugins: [],
  }