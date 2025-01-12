
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {},
    plugins: [
        require('flowbite/plugin')
    ],
};
