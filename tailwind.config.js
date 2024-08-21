/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Chivo Mono", "sans-serif"],
                static: ["Ubuntu", "serif"],
            },
            colors: {
                primary: '#151515',
                secondary1: '#353535',
                secondary2: '#BAFFC6',
                secondary3: '#0E0E0E',
                accent: '#57FF5D',
                accent2: '#708C75',
            },
            keyframes: {
                wiggle: {
                    '0%, 100%': { opacity: '1' },
                    '50%': { opacity: '0' },
                }
            },
            animation: {
                'wiggle': 'wiggle 1s ease-in-out infinite',
            }
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('@tailwindcss/typography'),
    ],
}

