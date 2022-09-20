<template>
    <section id="nav">
        <!-- <a href="#"><img src="images/logo.png" alt="logo"></a> -->

        <ul id="navbar-left">
            <div class="logo">
                <a href="/"><h3><strong><fa icon="fa-brands fa-shopify" /> Shop</strong></h3></a>
            </div>
            <li><router-link to="/" exact>Home</router-link></li>
            <li><router-link to="/shop">Shop</router-link></li>
            <li><router-link to="/blog">Blog</router-link></li>
            <li><router-link to="/about">About</router-link></li>
            <li><router-link to="/contact">Contact</router-link></li>

            <!-- <li v-for="link in links">
                <router-link :to="link.href">{{ link.title }}</router-link>
            </li>
            <a href="#" id="close"><fa icon="fa-solid fa-xmark" /></a> -->
        </ul>
        <ul id="navbar-right">
            <li><router-link to="/account">My Account</router-link></li>
            <li id="lg-bag"><router-link to="/cart"><fa icon="fa-solid fa-bag-shopping"></fa></router-link></li>
        </ul>

        <div id="mobile">
            <router-link to="/cart"><fa icon="fa-solid fa-bag-shopping"></fa></router-link>
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
    </section>
</template>

<script>
    export default {
        name: 'Navbar',
        data() {
            return {
                links: [
                    {
                        title: 'Home',
                        href: '/',
                    },
                    {
                        title: 'Shop',
                        href: '/shop'
                    },
                    {
                        title: 'Blog',
                        href: '/blog'
                    },
                    {
                        title: 'About',
                        href: '/about'
                    },
                    {
                        title: 'Contact',
                        href: '/contact'
                    },
                    {
                        title: 'My Account',
                        href: '/account'
                    },
                    {
                        title: 'Cart',
                        href: '/cart'
                    },
                ]
            }
        },
    }
</script>

<style lang="scss" scoped>
#nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    background: var(--light);
    z-index: 100;
    position: sticky;
    top: 0;
    left: 0;
    border-bottom: 2px solid #EEEEEE;

    a {
        text-decoration: none;
        color: var(--text);
    }

    h3 {
        margin-bottom: 0;
    }

    ul {
        margin: 0;
    }
}
#navbar-left, #navbar-right {
    display: flex;
    align-items: center;

    .logo {
        margin-right: 30px;
    }

    li {
        list-style: none;
        padding: 0 20px;
        position: relative;

        a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            color: var(--text-header);
            transition: 0.3s ease;
        }

        a:hover, a.router-link-active {
            color: var(--text-hover);
        }
        a.router-link-active::after {
            width: 30%;
        }

        a::after {
            content: "";
            width: 0%;
            height: 2px;
            background: var(--text-hover);
            position: absolute;
            bottom: -4px;
            left: 20px;
            transition: width .3s ease-in-out;
        }
        a:hover::after {
            width: 30%;
        }
    }
}

#mobile {
    display: none;
    align-items: center;
}
#close {
    display: none;
}
</style>
