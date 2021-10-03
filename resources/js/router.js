import VueRouter from "vue-router";
window.Vue = require("vue").default;

Vue.use(VueRouter);

let routes = [
    {
        path: "/dashboard",
        component: require("./components/Dashboard.vue").default
    },
    {
        path: "/inbound",
        component: require("./components/Inbound.vue").default
    },
    {
        path: "/outbound",
        component: require("./components/Outbound.vue").default
    },
    {
        path: "/containers",
        component: require("./components/docker/Containers.vue").default
    },
    {
        path: "/crates",
        component: require("./components/docker/Crates.vue").default
    },
    {
        path: "/items",
        component: require("./components/docker/Items.vue").default
    },
    
];

const router = new VueRouter({
    mode: "history",
    routes,
    linkActiveClass: "active",
});

export default router;