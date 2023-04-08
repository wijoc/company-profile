/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'open-sans': ['Open sans'],
        raleway: ['Raleway'],
        poppins: ['Poppins']
      },
      fontSize: {
        '3.5xl': '2rem'
      },
      colors: {
        primary: '#102542',
        secondary: '#F87060',
        tertiary: '#CDD7D6'
      },
      keyframes: {
        'bounce-left': {
          '0%, 100%': { transform: 'translateX(0)', 'animation-timing-function': 'cubic-bezier(0, 0, 0.2, 1)' },
          '50%': { transform: 'translateX(25%)', 'animation-timing-function': 'cubic-bezier(0.8, 0, 1, 1)' },
        }
      }
    },
  },
  plugins: [],
}