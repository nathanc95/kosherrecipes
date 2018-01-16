import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);
import App from './App.vue';
import {routes} from './routes';
import store from './store/store';

const router=new VueRouter({
    mode:'history',
    routes
});

new Vue({
   el:'#app',
   router,
    store,
   render:h=>h(App)
});





