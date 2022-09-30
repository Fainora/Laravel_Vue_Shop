import './bootstrap';
import { createApp } from 'vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { fab } from '@fortawesome/free-brands-svg-icons';
import axios from 'axios';
import router from './router';

const app = createApp({});


import NavbarComponent from './components/NavbarComponent.vue';
app.component('v-navbar', NavbarComponent);

import FooterComponent from './components/FooterComponent.vue';
app.component('v-footer', FooterComponent);

app.config.globalProperties.axios = axios;

library.add(fas, fab);

app.component('fa', FontAwesomeIcon).use(router).mount('#app');
