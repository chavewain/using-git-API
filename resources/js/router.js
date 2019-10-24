import Vue from 'vue';
import VueRouter from 'vue-router';
import home from './components/Home'
import hello from './components/Hello'
import repos from './components/Repos'
// import blog from '@/components/blog'
// import services from '@/components/services'
// import contact from '@/components/contact'
// import details from '@/components/details'

Vue.use(VueRouter);

export default new VueRouter({

        routes: [
            {
                path: '/',
                name: 'home',
                component: repos
            },
            {
                path: 'hello/:id',
                name: 'hello',
                component: hello,
                props: true
            }
        ],
        mode: 'history'
    }
)
