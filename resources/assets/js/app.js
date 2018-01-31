require('./bootstrap');

window.Vue = require('vue');

Vue.component('navbar', require('./components/Navbar.vue'))
Vue.component('sidebar', require('./components/Sidebar.vue'))
Vue.component('card', require('./components/Card.vue'))

const navigation = new Vue({
    el: '#navigation',
    data: {
      menuOpen: false,
      feed: [],
    },
    mounted() {
      this.getFeed()
    },
    methods: {
      toggleMenu() {
        this.menuOpen = !this.menuOpen
      },
      getFeed() {
        axios.get('/api/twitter/all')
        .then(response => {
          console.log(response.data)
          this.feed = response.data
        })
        .catch(err => {
          console.error(err)
        })
      }
    }
})
