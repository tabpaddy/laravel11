/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // or 'media' for automatic dark mode based on user's system settings
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
  

