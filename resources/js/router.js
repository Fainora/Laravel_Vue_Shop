import { createRouter, createWebHistory } from 'vue-router';
import Index from './components/IndexComponent.vue';
import Shop from './components/ShopComponent.vue';
import Product from './components/ProductComponent.vue';
import Blog from './components/BlogComponent.vue';
import Contact from './components/ContactComponent.vue';
import About from './components/AboutComponent.vue';
import Cart from './components/CartComponent.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: "/",
            component: Index
        },
        {
            path: "/shop",
            component: Shop
        },
        {
            path: "/product/{id}",
            component: Product
        },
        {
            path: "/blog",
            component: Blog
        },
        {
            path: "/contact",
            component: Contact
        },
        {
            path: "/about",
            component: About
        },
        {
            path: "/cart",
            component: Cart
        }
    ]
})

export default router

