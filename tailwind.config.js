/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
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
            }
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}

