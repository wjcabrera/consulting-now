import { createApp } from 'vue';
import App from './Login.vue';
import '@mdi/font/css/materialdesignicons.css';
import vuetify from "@/plugins/vuetify";
import { library } from '@fortawesome/fontawesome-svg-core';
import { faUser, faEnvelope, faChevronDown, fas, faMarker } from '@fortawesome/free-solid-svg-icons';
import { faGithub, faTwitter, faLinkedin, faLinkedinIn } from '@fortawesome/free-brands-svg-icons';
import { faCircleDown } from '@fortawesome/free-regular-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faUser, faEnvelope, faGithub, faTwitter, faLinkedin, faChevronDown, faLinkedinIn, fas, faCircleDown, faMarker);

createApp(App).use(vuetify).component("font-awesome-icon", FontAwesomeIcon).mount('#app');