<template>
    <div class="container">
        <div class="loader"></div>
    </div>
</template>

<script>
    export default {
        name: 'Loading'
    }
</script>

<style lang="scss" scoped>
    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
.loader {
    width: 80px;
    height: 80px;
    border: transparent solid 3px;
    border-left-color: var(--dark);
    border-top-color: var(--dark);
    position: relative;
    border-radius: 100%;
    animation: loading 5s infinite linear;
}
.loader::before {
    position: absolute;
    content: '';
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    border: transparent solid 3px;
    border-left-color: var(--dark);
    border-top-color: var(--dark);
    border-radius: 100%;
    animation: loading 2s infinite linear reverse;
}
.loader::after {
    position: absolute;
    content: '';
    top: 20px;
    left: 20px;
    right: 20px;
    bottom: 20px;
    border: transparent solid 3px;
    border-left-color: var(--dark);
    border-top-color: var(--dark);
    border-radius: 100%;
    animation: loading 4s infinite linear;
}
@keyframes loading {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
</style>
