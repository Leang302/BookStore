/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        screens: {
            phone: "559px",
        },
    },

    plugins: [require("flowbite/plugin"), require("@tailwindcss/forms")],
};
