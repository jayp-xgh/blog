/** @type {import('tailwindcss').Config} */
export default {
  content:[
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'bg-dark': '#1b1e2c',
        },
    },
  },
  plugins: [],
}

