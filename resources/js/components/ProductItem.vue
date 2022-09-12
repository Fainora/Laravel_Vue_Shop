<template>
    <div class="product">
        <img :src="image_url" alt="">
        <div class="description">
            <span>Brand</span>
            <h5>{{ title }}</h5>
            <div class="star">
                <fa icon="star" />
                <fa icon="star" />
                <fa icon="star" />
                <fa icon="star" />
                <fa icon="star" />
            </div>
            <h4>${{ price }}</h4>
        </div>
        <a href="#"><fa icon="cart-shopping" class="cart" /></a>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            default: 'NULL'
        },
        image_url: {
            type: String,
            default: '/images/nophoto.png'
        },
        price: {
            type: Number,
            default: 0
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
