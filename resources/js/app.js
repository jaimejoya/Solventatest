import { createApp } from 'vue';
import Login from './components/login.vue';

const app = createApp({});
app.component('login', Login);
app.mount('#app');