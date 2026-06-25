import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
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
        // Naval color palette
        navy: {
          50: '#e8edf3',
          100: '#c5d1e0',
          200: '#9eb3c9',
          300: '#7695b3',
          400: '#557da1',
          500: '#1a3a5c',
          600: '#14334d',
          700: '#0e263a',
          800: '#081a2a',
          900: '#040d17',
        },
        ocean: {
          50: '#e6f1f5',
          100: '#c0dbe6',
          200: '#96c4d4',
          300: '#6cadc2',
          400: '#4d9bb5',
          500: '#2e89a8',
          600: '#27758f',
          700: '#1d5a6e',
          800: '#14404e',
          900: '#0a2530',
        },
        steel: {
          50: '#f2f4f5',
          100: '#e0e4e6',
          200: '#c4cacd',
          300: '#a8b0b4',
          400: '#8f999e',
          500: '#768288',
          600: '#5e6b72',
          700: '#47525a',
          800: '#303a42',
          900: '#1a2128',
        },
        brass: {
          50: '#faf6ea',
          100: '#f2eacb',
          200: '#e9dba8',
          300: '#dfcc85',
          400: '#d6bf6a',
          500: '#ccb250',
          600: '#b0983d',
          700: '#8a782e',
          800: '#645820',
          900: '#3d3512',
        },
      },
      fontFamily: {
        'cinzel': ['Cinzel', 'serif'],
        'inter': ['Inter', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}