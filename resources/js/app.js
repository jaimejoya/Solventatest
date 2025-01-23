require('./bootstrap');
window.Vue = require('vue').default;

// Registrar componentes Vue
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app'
});