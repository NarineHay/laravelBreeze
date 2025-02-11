
import '../../public/assets/libs/choices.js/public/assets/styles/choices.min.css';
import '../../public/assets/libs/swiper/swiper-bundle.min.css';

import '../css/app.css';
import '../css/app.css';
import '../css/tailwind.css';

import '../../public/assets/libs/@popperjs/core/umd/popper.min';
import '../../public/assets/libs/simplebar/simplebar.min';
import './modules/user/switcher.js';
import '../../public/assets/libs/choices.js/public/assets/scripts/choices.min';

// import './modules/job-list.init.js';
import './modules/user/dropdown&modal.init.js';

import '../../public/assets/libs/swiper/swiper-bundle.min';
import './modules/user/swiper.init.js';


// import './bootstrap';

import './modules/user/nav&tabs.js';




import { initNavbar } from './modules/user/navbar.js';


import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/src/js';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});



document.addEventListener("DOMContentLoaded", () => {
    initNavbar();
});

