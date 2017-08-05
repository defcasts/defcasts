
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./components');

window.Vue = require('vue');
Vue.use(VueResource);

// Dependencies
import VueResource from 'vue-resource'

// Register Vue components here that cam be used throughout the application.
new Vue({
    el: '#navbar',
    components
});
