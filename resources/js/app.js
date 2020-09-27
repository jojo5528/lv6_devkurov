import Vue from 'vue';

require('./bootstrap');
require('./components.js');

import VueSmoothScroll from 'vue2-smooth-scroll';
Vue.use(VueSmoothScroll);

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
Vue.use(VueSweetalert2);

const app = new Vue({
    el: '#app',
});
