/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.vue"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}

