
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// import Example from './components/Example';
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import store from './store/';
import routes from './routes';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const router = new VueRouter({
    routes
});
const app = new Vue({
    store,
    router
}).$mount('#app');
