module.exports = {
  mode: "jit",
  purge: {
    safelist: [
      'text-black'
    ],
    content: [
      "./**/*.html",
      "./**/*.js"
    ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
