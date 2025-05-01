/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Enables dark mode via class
    content: [
        './index.html', // Add paths to your files
        './resources/**/*.{blade.php,vue,js,ts,jsx,tsx}',
        '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        '../../storage/framework/views/*.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#0891b2',
                    50: '#ecfeff',
                    100: '#cffafe',
                    light: '#06b6d4',
                    lighter: '#22d3ee',
                    dark: '#0e7490',
                    darker: '#155e75',
                },
            },
        },
    },
    plugins: [],
}
