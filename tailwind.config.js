/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        colors: {
            "healthtrack-dark": "rgb(2, 15, 2)",
            "healthtrack-dark-hover": "rgb(58, 77, 58)",
            "healthtrack-light": "rgb(55, 240, 55)",
            "healthtrack-light-hover": "rgb(97, 242, 97)",
        }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

