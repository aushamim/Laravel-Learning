import tailwindcss from "@tailwindcss/vite";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    server: {
        host: "example.test",
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
