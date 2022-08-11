<template>
    <section id="nav">
        <!-- <a href="#"><img src="images/logo.png" alt="logo"></a> -->
        <a href="/"><h3>Logo</h3></a>

        <div>
            <ul id="navbar">
                <!-- <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li> -->
                <li v-for="link in links">
                    <router-link :to="link.href">{{ link.title }}</router-link>
                </li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
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
                        href: '/'
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
                        title: 'Cart',
                        href: '/cart'
                    },
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>
#nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    background: var(--bg);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
    z-index: 100;
    position: sticky;
    top: 0;
    left: 0;
}

#navbar {
    display: flex;
    align-items: center;
    justify-content: center;
}

#navbar li {
    list-style: none;
    padding: 0 20px;
    position: relative;
}

#navbar li a {
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: var(--text-header);
    transition: 0.3s ease;
}

#navbar li a:hover {
    color: var(--text-hover);
}

#navbar li a:hover,
#navbar li a.active {
    color: var(--text-hover);
}

#navbar li a.active::after,
#navbar li a:hover::after {
    content: "";
    width: 30%;
    height: 2px;
    background: var(--text-hover);
    position: absolute;
    bottom: -4px;
    left: 20px;
}

#mobile {
    display: none;
    align-items: center;
}
#close {
    display: none;
}
</style>
