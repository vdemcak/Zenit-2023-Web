/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        orange: "#F57E57",
        skyBlue: "#06A3DA",
        darkBlue: "#091E3E",
        offWhite: "#EEF9FF",
        text: "#6B6A75",
      },
    },
  },
  plugins: [],
};
