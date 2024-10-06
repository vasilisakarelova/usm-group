module.exports = {
  content: [
    'www/app/templates/**/*.php',
    'www/app/snippets/**/*.php',
    'www/app/plugins/**/*.php',
    'src/js/**/*.{js,jsx}',
  ],
  theme: {
    extend: {
      gridTemplateColumns: {
        // 24 column grid
        '24': 'repeat(24, minmax(0, 1fr))',
      },

      screens: {
        'sm': {'max': '519px'},
        'md': {'min': '520px', 'max': '1279px'},
        'lg': {'min': '1280px' },
        'xl': {'min': '1600px' },
      },

      fontFamily: {
        'ABCGravityExpanded': ['ABCGravity Expanded'],
        'ABCGravityCondensed': ['ABCGravity Condensed'],
      },

      listStyleType: {
        roman: 'upper-roman',
      },
    },
  },
  corePlugins: {
    aspectRatio: false,
  },
  plugins: [
    require('@tailwindcss/aspect-ratio')
  ],
}
