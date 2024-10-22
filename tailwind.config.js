const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': {
                    '100': '#feb1dd',
                    '200': '#ff79c5',
                    '300': '#fd32a9',
                    '400': '#f80091',
                    '500': '#f60077',
                },
                'secondary': {
                    '100': '#e1fedd',
                    '200': '#cdfec8',
                    '300': '#b9fdb1',
                    '400': '#a6fa9d',
                    '500': '#95f78b',
                },
                'tertiary': {
                    '900': '#0e1117',
                    '800': '#282a36',
                },
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
