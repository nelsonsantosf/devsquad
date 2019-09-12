/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
    { name: 'home', path: '/admin/home', component: require('./components/Home.vue').default },
    { name: 'product.index', path: '/admin/products', component: require('./components/Product.vue').default },
    { name: 'product.show', path: '/admin/products/:id/show', component: require('./components/ProductShow.vue').default },
    { name: 'product.create', path: '/admin/products/create', component: require('./components/ProductCreate.vue').default },
    { name: 'product.edit', path: '/admin/products/:id/edit', component: require('./components/ProductEdit.vue').default }
]

const router = new VueRouter({
    mode: 'history',
    base: '',
    routes
})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
