/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        fontFamily: {
            body: ["Poppins"],
        },
        extend: {
            colors: {
                primary: "#ee6055",
                secondary: '#60d394',
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
