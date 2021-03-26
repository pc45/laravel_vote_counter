const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',

                black: colors.black,
                white: colors.white,
                gray: colors.trueGray,
                'gray-background': '#f7f8fc',
                'blue':'#328af1',
                'blue-hover':'#2879bd',
                'yellow':'#ffc73c',
                'red': '#ec454f',
                'green': '#1aab8b',
                'purple':'#8b60ed',
            },
            spacing: {
                22: '5.5rem',
                44: '11rem',
                70: '17.5rem',
                76: '19rem',
                104: '26rem',
                175: '43.75rem',
            },
            maxWidth: {
              custom: '68.5rem',
            },
            boxShadow: {
                card: '4px 4px 15px 0 rgba(36,37,38,0.08)',
                dialogue: '3px 4px 15px 0 rgba(36,37,38,0.22)',
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                xxs: ['.0625rem', { lineHeight: '1rem' } ],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],
};
