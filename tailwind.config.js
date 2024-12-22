/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}", "./index.html", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      transitionDuration: {
        '2000': '2000ms',
        '3000': '3000ms',
        '4000': '4000ms',
      },
      aspectRatio: {
        '16/9': [16, 9],
        '4/3': [4, 3],
      },
    },
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
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
  ],
}

