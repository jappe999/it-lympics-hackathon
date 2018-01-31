require('./bootstrap');

window.Vue = require('vue');

Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('sidebar', require('./components/Sidebar.vue'));

const app = new Vue({
    el: '#app',
    data: {
      menuOpen: false,
    },
    methods: {
      toggleMenu() {
        this.menuOpen = !this.menuOpen
      }
    }
});
