/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./templates/**/*.{tpl,js}"],
  theme: {
    extend: {
      colors: {
        primary1: "#00504F", //green
        primary2: "#DAE4E3", //grey
        primary3: "#F4FEFD", //bg-body
      },
    },
  },
  plugins: [],
};
