/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * Inititalize Vue Plugins and Components
 */

import ElementUI from "element-ui";
import { Message, Notification } from "element-ui";
/** Element UI default locale is Simplified Chinese, do this to switch to English */
import locale from "element-ui/lib/locale/lang/en";
import { library } from '@fortawesome/fontawesome-svg-core'
import { faLinkedinIn,faGithub,faStackOverflow } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import VueRouter from "vue-router";
import VueClipboard from "vue-clipboard2";


Vue.use(ElementUI, { locale });
global.Message = Message;
global.Notification = Notification;

library.add(faLinkedinIn,faGithub,faStackOverflow);
Vue.component('fa-icon', FontAwesomeIcon);

Vue.use(VueRouter);
Vue.use(VueClipboard);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./components/', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Toolbox from "./components/Toolbox";
import HomePage from "./components/HomePage";
import Resume from "./components/Resume";
import ContactMe from "./components/ContactMe";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            // will match everything
            path: '*'
        },
        {
            path: '/',
            name: "default",
            component: HomePage,
        },
        {
            path: "/home",
            name: "home",
            component: HomePage,
        },
        {
            path: "/resume",
            name: "resume",
            component: Resume,
        },
        {
            path: "/contact-me",
            name: "contact-me",
            component: ContactMe,
        },
        {
            path: '/toolbox',
            name: 'toolbox',
            component: Toolbox,
        },
    ],
});


const app = new Vue({
    el: '#app',
    router
});
