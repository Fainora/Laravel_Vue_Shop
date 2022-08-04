<template>
    <div class="navbar">
        <a class="navbar-brand" href="/">
            <font-awesome-icon icon="fa-solid fa-paw" />
            MyShop
        </a>
        <ul class="icons">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'Header',
        data() {
            return {
                links: [
                    {
                        title: 'Главная',
                        href: '/'
                    },
                    {
                        title: 'О нас',
                        href: '/'
                    },
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>
.navbar {
    height: 60px;
    background: var(--light);
    z-index: 10;
    display: flex;
    position: relative;

    .navbar-brand {
        margin-left: 20px;
    }

    .icons {
        display: flex;
    }
    .nav-item {
        padding-right: 10px;
    }
    ul {
        margin-bottom: 0;
    }
}
</style>
