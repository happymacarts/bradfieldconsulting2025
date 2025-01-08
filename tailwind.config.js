import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    presets: [require("./vendor/wireui/wireui/tailwind.config.js")],
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./vendor/wireui/wireui/src/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/Components/**/*.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    50: "#f3f6fc",
                    100: "#e6eef8",
                    200: "#c8dbef",
                    300: "#79c0e1", //"#6d93b5", //#97bce2
                    400: "#5f99d1",
                    500: "#3a7bbd",
                    600: "#275b95", //brand blue
                    700: "#234e81",
                    800: "#172859", //#20436c",
                    900: "#203a5a",
                    950: "#15253c",
                },
                secondary: colors.gray,
                positive: colors.emerald,
                negative: colors.red,
                warning: colors.amber,
                info: colors.blue,
            },
            transitionProperty: {
                bottom: "bottom",
                transform: "transform",
            },
        },
    },
    darkMode: "class",
    plugins: [forms],
};
