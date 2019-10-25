import Vue from 'vue';
import VueRouter from 'vue-router';
import home from './components/Home'
import contributors from './components/Contributors'
import repos from './components/Repos'


Vue.use(VueRouter);

export default new VueRouter({

        routes: [
            {
                path: '/',
                name: 'home',
                component: repos
            },
            {
                path: '/contributors/:id',
                name: 'contributors',
                component: contributors,
                props: true
            },
           
        ],
        mode: 'history'
    }
)
