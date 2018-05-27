 
require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
window.Vue = require('vue');
  
let navbar = require('./components/navbar.vue');
let home = require('./components/home.vue');
let about = require('./components/about.vue');
const routes = [
    { path: '/main', component: home },
    { path: '/about', component: about }
  ]
  const router = new VueRouter({
      mode: 'history',
    routes // short for `routes: routes`
  })

const app = new Vue({
    el: '#app',
    router,
    components:{navbar}
});
