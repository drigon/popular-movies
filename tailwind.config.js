const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            width:{
                '96': '24rem',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        spinner: (theme) => ({
            default: {
              color: '#dae1e7', // color you want to make the spinner
              size: '1em', // size of the spinner (used for both width and height)
              border: '2px', // border-width of the spinner (shouldn't be bigger than half the spinner's size)
              speed: '500ms', // the speed at which the spinner should rotate
            },
          }),
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
        require('@tailwindcss/ui'),
        require('tailwindcss-spinner')({ className: 'spinner', themeKey: 'spinner' }),
    ],
};
