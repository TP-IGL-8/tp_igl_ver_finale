/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');
import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';
import Routes from './routes';
import App from './views/App';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'mdbvue/lib/css/mdb.min.css';
import '@fortawesome/fontawesome-free/css/all.css';
window.Vue=require('vue');
Vue.component('navbar-comp', require('./components/Navbar.vue').default);
Vue.use(Vuetify);
const app=new Vue(
    {
        el:"#app",
        router: Routes,
        render: h => h(App),
    }
);

export default app;