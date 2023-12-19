/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./template-parts/*.{php,html,js}", "./*.{php,html,js}"],
  theme: {
    container: {
      screens: {
    'desktop': '1320px'
      }
    },
    extend: {
      height: {
        '112': '30rem',
      },
    },
    fontSize: {
      sm: ['0.8rem', '1rem'],
      base: ['1rem', '1.25rem'], 
      xl: ['1.25rem', '1.875rem'],
      '2xl': ['1.875rem', '2.5rem'],
      '3xl': ['2.5rem', '3.125rem'],
      '4xl': ['3.125rem', '3.75rem' ],
    },
    colors: {
      'green-100': '#2E4845',
      'green-200': '#253F3C',
      'white-100': '#F7FAF6',
      'white-200': '#F1F3F0',
      'white-300': '#CAD1CE',
      'red-error': '#E83644',
      'orange-warning': '#FF8C21',
      'green-success': '#00B453'
    },
  },
  plugins: [],
}

