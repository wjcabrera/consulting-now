import { createI18n } from 'vue-i18n';
import en from "@/langs/en.json";
import pt from "@/langs/pt.json";
import es from '@/langs/es.json';

const i18n = createI18n({
    locale: 'es', // set locale
    fallbackLocale: 'es', // set fallback locale
    messages: { en, pt, es }, // set locale messages
});

export default i18n;