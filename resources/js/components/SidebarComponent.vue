<template>
<div class="sidebar">
    <ul>
        <li><a href=""><font-awesome-icon icon="fa-solid fa-bars" /></a></li>
        <li><a href=""><font-awesome-icon icon="fa-solid fa-cart-shopping" /></a></li>
        <li><a href=""><font-awesome-icon icon="fa-brands fa-vk" /></a></li>
        <li><a href=""><font-awesome-icon icon="fa-brands fa-facebook" /></a></li>
        <li><a href=""><font-awesome-icon icon="fa-brands fa-instagram" /></a></li>
        <li><a href=""><font-awesome-icon icon="fa-solid fa-phone" /></a></li>
    </ul>
</div>
</template>

<script>
    export default {
        name: 'Sidebar',
        mounted() {
            console.log('Sidebar mounted.')
        }
    }
</script>

<style lang="scss" scoped>
.sidebar {
    width: 80px;
    height: 100vh;
    background: var(--light);
    position: fixed;
    padding: 20px;
    transition: all 0.5s ease;
    top: 0;
    left: 0;
    text-align: center;
    -webkit-box-shadow: 4px 0px 8px 0px rgba(34, 60, 80, 0.2);
    -moz-box-shadow: 4px 0px 8px 0px rgba(34, 60, 80, 0.2);
    box-shadow: 4px 0px 8px 0px rgba(34, 60, 80, 0.2);
    z-index: 5;
}

ul li a {
    display: block;
    padding: 5px 0;
    position: relative;
}
.icon {
    color:white;
    width: 30px;
    display: inline-block;
}
</style>
