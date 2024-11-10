/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', 'sans-serif'],
        heading: ['Mulish', 'sans-serif']
      },
      colors: {
        orange: '#FBB13C',
        black: '#191919',
        lightGray: '#CAC6C6',
        whiteBackground: '#FBF8F4',
        purple: '#B8AFDA',
        red: '#FB5E3C',
      },
      boxShadow: {
        'bottom': '0 4px 6px rgba(0, 0, 0, 0.3)',
      },
      borderWidth: {
        '3': '2.5px',
      },
      placeholderColor: {
        'white-500': '#D0D0D0'
      },
      padding: {
        '18': '4.5rem',
        '20': '5rem',
      },
    },
  },
  plugins: [],
}
