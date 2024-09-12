/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        "fredoka":["Fredoka"],
        "barlow":["Barlow"],
        "fraunces":["Fraunces"]
      },
      colors:{
          "blue-principal": ['#4A90E2'],
          "paragraph-color": ['#333333'],
          "soft-red": "hsl(7, 99%, 70%)",
          "yellow-p": "hsl(51, 100%, 49%)",
          "dark-desaturated-cyan": "hsl(167, 40%, 24%)",
          "dark-blue": "hsl(198, 62%, 26%)",
          "dark-moderate-cyan": "hsl(168, 34%, 41%)",

          "very-dark-desaturated-blue": "hsl(212, 27%, 19%)",
          "very-dark-grayish-blue": "hsl(213, 9%, 39%)",
          "dark-grayish-blue": "hsl(232, 10%, 55%)",
          "grayish-blue": "hsl(210, 4%, 67%)",

      }
    },
  },
  plugins: [],
}

