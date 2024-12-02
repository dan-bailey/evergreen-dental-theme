/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./index.html", "./node_modules/flowbite/**/*.js"],
  theme: {
    colors: {
      'forest': '#114e35',
      'mint': '#cce2ce',
      'latte': '#cca77c',
      'steel': '#d9d9d9',
      'blackish': '#040c1c',
      'offwhite': '#f3f3f3',
      'skyblue': '#6cd3f0',
    },
    fontFamily: {
      cabin: ['Cabin', 'Arial', 'sans-serif'],
      raleway: ['Raleway', 'Helvetica', 'Roboto', 'sans-serif'],
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

