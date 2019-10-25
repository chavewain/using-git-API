


import Vue from 'vue'
import VueRouter from 'vue-router'

import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// import App from './components/App';

Vue.use(BootstrapVue)
Vue.use(VueRouter)

// Paginas
import App from './views/App'
import Home from './views/Home'
import contributors from './views/Contributors'


// Componentes
Vue.component('repos', require('./components/Repos.vue').default);
Vue.component('contributors', require('./components/Contributors.vue').default);
Vue.component('App', require('./components/App.vue').default);




const router = new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/contributors/:id',
            name: 'contributors',
            component: contributors,
        },
        
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
