import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
           
        },
    },

    plugins: [
        forms, 
        typography,
        function ({ addUtilities }) {
            addUtilities({
                '.bg-gradient::after': {
                    content: '""',
                    background: 'radial-gradient(500px circle at var(--mouse-x) var(--mouse-y), #FFA857, transparent 20%)',
                },
                '.classTest::-webkit-scrollbar': {
                    display: 'none !important',
                },
                '.titlogin': {
                    marginBottom: '10px !important',
                },
            }, ['responsive', 'hover']);
        }
    ],
};
