import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import type { DefineComponent } from 'vue';
import { createApp, h } from 'vue';
import { ZiggyVue } from 'ziggy-js';
import { initializeTheme } from './composables/useAppearance';
import $ from 'jquery';
import AppLayout from './layouts/AppLayout.vue';
import '@fortawesome/fontawesome-free/css/all.css';
import Toast, {useToast} from "vue-toastification"
import "vue-toastification/dist/index.css"
import { router } from '@inertiajs/vue3'

declare global {
    interface FlashProps {
        success?: string;
        error?: string;
    }

    interface Window {
        $: typeof $;
        jQuery: typeof $;
    }
}

window.$ = $;
window.jQuery = $;

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(`./pages/${name}.vue`, import.meta.glob<DefineComponent>('./pages/**/*.vue'))
    .then((page) => {
        page.default.layout = page.default.layout || AppLayout;
        return page;
    }),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(Toast)
            .use(ZiggyVue)
            .mount(el);

        const toast = useToast();
        router.on('success', (event) => {
            const flash = event.detail.page.props?.flash as FlashProps
            if (flash?.success) {
              toast.success(flash.success)
            }

            if (flash?.error) {
              toast.error(flash.error)
            }
        })
    },
    progress: {
        color: '#4B5563',
    },
});

// This will set light / dark mode on page load...
initializeTheme();
