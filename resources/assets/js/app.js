
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';
import store from './store';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(Buefy);

Vue.component('form-cargo', require('./components/form-cargo.vue')); 
Vue.component('form-add-cargo', require('./components/form-add-cargo.vue'));
Vue.component('form-add-order', require('./components/form-add-order.vue'));
Vue.component('form-add-takelaj', require('./components/form-add-takelaj.vue'));
Vue.component('form-add-gruzchiki', require('./components/form-add-gruzchiki.vue'));
Vue.component('form-add-auto', require('./components/form-add-auto.vue'));
Vue.component('form-add-address', require('./components/form-add-address.vue'));
Vue.component('form-add-carrier-proposal', require('./components/form-add-carrier-proposal.vue'));


Vue.component('orders-table', require('./components/orders-table.vue'));


const app = new Vue({
    el: '#app',
    store
});
