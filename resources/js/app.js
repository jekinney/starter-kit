import './bootstrap';

import { createApp, h } from 'vue';
import { modal } from 'momentum-modal';
import { ZiggyVue } from 'ziggy-js';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import toast from './Plugins/toast';

const appName = import.meta.env.VITE_APP_NAME

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(modal, {
                resolve: (name) => resolvePageComponent(`./Modals/${name}.vue`, import.meta.glob('./Modals/**/*.vue'))
            })
            .use(toast)
            .use(plugin)
            .use(ZiggyVue)
        .mount(el)
    },
})
