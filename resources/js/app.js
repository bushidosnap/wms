require("./bootstrap");
window.Vue = require("vue").default;
import Vue from "vue";
import router from "./router";

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    router
});
