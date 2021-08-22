module.exports = {
  // purge: {
  //   enabled: true,
  //   content: [
  //     './app/Views/**/*.php',
  //     './app/Views/*.php',
  //   ],
  // },
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'lilie': ['"Open Sans"', 'sans-serif']
    },
    extend: {
      colors: {
        'lilie-primary': '#193248',
        'lilie-warning': '#eca71e',
        'lilie-danger': '#9f392a',
        'lilie-bg': '#e4e5c6'
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
