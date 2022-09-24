import { createRouter, createWebHistory } from 'vue-router';
import Index from './pages/IndexComponent.vue';
import Shop from './pages/ShopComponent.vue';
import Product from './pages/ProductComponent.vue';
import Blog from './pages/BlogComponent.vue';
import PostIdPage from './pages/PostIdPage.vue';
import Contact from './pages/ContactComponent.vue';
import About from './pages/AboutComponent.vue';
import Cart from './pages/CartComponent.vue';

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
            path: "/product/:id",
            component: Product,
        },
        {
            path: "/blog",
            component: Blog
        },
        {
            path: '/blog/post/:id',
            component: PostIdPage
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

