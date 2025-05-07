import 'bootstrap';
import '../css/app.css';

// tailwind.config.js
module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {
        colors: {
          engemedical: '#2a7d2e',
        }
      }
    },
    plugins: [],
  }
  