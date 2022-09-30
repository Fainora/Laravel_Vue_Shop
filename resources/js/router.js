import { createRouter, createWebHistory } from 'vue-router';
import Index from './pages/Index.vue';
import Shop from './pages/Shop.vue';
import Product from './pages/Product.vue';
import Blog from './pages/Blog.vue';
import PostIdPage from './pages/PostIdPage.vue';
import Contact from './pages/Contact.vue';
import About from './pages/About.vue';
import Account from './pages/Account.vue';
import Cart from './pages/Cart.vue';

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
            path: "/account",
            component: Account
        },
        {
            path: "/cart",
            component: Cart
        }
    ]
})

export default router

