import Vue from 'vue';

const LOGO = () => import('./components/Logo');

Vue.component('logo', LOGO);


const Welcome = () => import('./pages/Welcome');

Vue.component('page-welcome', Welcome);
