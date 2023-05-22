/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
    ],
  theme: {
      maxHeight: {
        '0': '0',
        '1/4': '25%',
        '1/2': '50%',
        '2/3': '60%',
        '3/4': '75%',
        'full': '100%',
    },
    extend: {},
  },
  plugins: [],
}