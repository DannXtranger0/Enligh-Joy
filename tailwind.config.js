/** @type {import('tailwindcss').Config} */
export default {
  mode: 'jit',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        'always': '-4px -4px 10px #00FF0050',
        'every-day': '4px -4px 10px #00FF0050',
        'usually': '-8px 0 10px #66FF6650',
        'often': '8px 0 10px #66FF6650',
        'sometimes': '-8px 0 10px #FFFF6650',
        'rarely': '8px 0 10px #FFFF6650',
        'hardly': '-4px 4px 10px #FF000050',
        'never': '4px 4px 10px #FF000050'

   
      },
      fontFamily:{
        "fredoka":["Fredoka"],
        "barlow":["Barlow"],
        "fraunces":["Fraunces"]
      },
      colors:{
          "orange-smooth": ["#F5A623"],
          "blue-principal": ['#4A90E2'],
          "purple-principal": ["#5F3A84"],
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

