/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "node_modules/preline/dist/*.js",
  ],
  darkMode: 'class',
  theme:{
    fontFamily: {
      sans: ['Inter', 'sans-serif']
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('preline/plugin')
  ],
}