/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./index.html"],
  theme: {
    colors: {
      'forest': '#114e35',
      'mint': '#cce2ce',
      'latte': '#cca77c',
      'steel': '#d9d9d9',
      'blackish': '#040c1c',
      'offwhite': '#f3f3f3'
    },
    fontFamily: {
      cabin: ['Cabin', 'Arial', 'sans-serif'],
      'raleway': ['Raleway', 'Helvetica', 'Roboto', 'sans-serif'],
    }
  },
  plugins: [],
}

