module.exports = {
  content: ['./src/**/*.php', './src/assets/**/*.js'],
  theme: {
    extend: {
      colors: {
        pinkown: 'rgb(var(--pink-own) / <alpha-value>)',
        blueown: 'rgb(var(--blue-own) / <alpha-value>)',
        bluelightown: 'rgb(var(--blue-light-own) / <alpha-value>)',
        purpleown: 'rgb(var(--purple-own) / <alpha-value>)',
        greenown: 'rgb(var(--green-own) / <alpha-value>)',
        orangeown: 'rgb(var(--orange-own) / <alpha-value>)',
        yellowown: 'rgb(var(--yellow-own) / <alpha-value>)',
        darkown: 'rgb(var(--dark-own) / <alpha-value>)',
        lightown: 'rgb(var(--light-own) / <alpha-value>)',
        redown: 'rgb(var(--red-own) / <alpha-value>)',
      }
    },
  },
  plugins: [],
};
