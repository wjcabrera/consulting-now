// import './bootstrap';
import { createApp } from 'vue';
import App from './Admin.vue';
import i18n from "@/plugins/i18n";
import vuetify from "@/plugins/vuetify";
import { library } from '@fortawesome/fontawesome-svg-core';
import { faUser, faEnvelope, faChevronDown, fas, faMarker } from '@fortawesome/free-solid-svg-icons';
import { faGithub, faTwitter, faLinkedin, faLinkedinIn } from '@fortawesome/free-brands-svg-icons';
import { faCircleDown } from '@fortawesome/free-regular-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import '@mdi/font/css/materialdesignicons.css';

library.add(faUser, faEnvelope, faGithub, faTwitter, faLinkedin, faChevronDown, faLinkedinIn, fas, faCircleDown, faMarker);

createApp(App).use(vuetify)
.use(i18n)
.component("font-awesome-icon", FontAwesomeIcon)
.mount('#app')