/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            // MENAMBAHKAN ANIMASI DISINI
            animation: {
                'spin-slow': 'spin 10s linear infinite',
                'scroll': 'scroll 25s linear infinite', // <--- Animasi baru untuk logo
            },
            keyframes: {
                scroll: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-100%)' }, // <--- Gerak ke kiri
                }
            }
        },
    },
    plugins: [],
};