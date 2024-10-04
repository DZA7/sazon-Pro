import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue', // Agregado para asegurar la inclusión de los archivos Vue si los utilizas
        './resources/**/*.js',      // Asegura que todos los archivos JS se incluyan
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // Puedes agregar más extensiones aquí si es necesario
        },
    },

    plugins: [
        forms,
        // Puedes agregar más plugins aquí si es necesario
    ],
};
