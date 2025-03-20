/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ['class'],
    content: [
        // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        // './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        // './resources/js/**/*.{vue,js,ts,jsx,tsx}',
    ],
    theme: {
        extend: {
            colors: {
                blue: '#007bff',
                indigo: '#6610f2',
                purple: '#6f42c1',
                pink: '#e83e8c',
                red: '#dc3545',
                orange: '#fd7e14',
                yellow: '#ffc107',
                green: '#28a745',
                teal: '#20c997',
                cyan: '#17a2b8',
                white: '#fff',
                gray: '#6c757d',
                'gray-dark': '#343a40',
                primary: '#007bff',
                secondary: '#6c757d',
                success: '#28a745',
                info: '#17a2b8',
                warning: '#ffc107',
                danger: '#dc3545',
                light: '#f8f9fa',
                dark: '#343a40',
            },
            screens: {
                xs: '0px',
                sm: '576px',
                md: '768px',
                lg: '992px',
                xl: '1200px',
                'min-575': {
                    'min': '575px'
                },
                'max-575': {
                    'max': '575px'
                },
                'min-768': {
                    'min': '768px'
                },
                'max-767': {
                    'max': '767px'
                },
                'min-992': {
                    'min': '992px'
                },
                'max-991': {
                    'max': '991px'
                },
                'min-1200': {
                    'min': '1200px'
                },
                'max-1199': {
                    'max': '1199px'
                },
                // 'min-1536': {
                //     'min': '1536px'
                // },
                'off-set-1': { min: '576px', max: '767px' },
                'off-set-2': { min: '767px', max: '991px' },
                'off-set-3': { min: '992px', max: '1199px' },
            },
            fontFamily: {
                sans: [
                    '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"',
                    'Arial', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"',
                ],
                mono: [
                    'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"',
                    'monospace',
                ],
            },
        },
    },
    corePlugins: {
        preflight: false,
        container: false
    },
    plugins: [],
};
