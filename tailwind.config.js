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
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'lora': 'Lora',
                'hind': 'Hind Madurai',
                'montserrat': 'Montserrat'
            },
            colors: {
                'black-text': '#403233',
                'white-bg': '#FFF7F3',
                'pink-champ': '#F9E3D6',
                'pink-dark': '#EFC7C2',
                'yellow-pale': '#FDDDBC',
                'green-accent': '#DDE5B6'
            }
        },
    },

    plugins: [forms, typography],
};
