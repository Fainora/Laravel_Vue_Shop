<template>
    <div class="loading">
        <h2>Loading...</h2>
    </div>
</template>

<script>
    export default {
        name: 'Loading'
    }
</script>

<style lang="scss" scoped>
.loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
</style>
