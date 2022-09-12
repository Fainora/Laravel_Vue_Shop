<template>
    <section id="page-header">
        <h2>Shop</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="products" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="product-container">
            <div id="product-list" v-if="loading" >
                <loading />
            </div>
            <product-item v-else
                v-for="product in products"
                :title="product.title"
                :image_url="product.image_url"
                :price="product.price"
            />
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><fa icon="arrow-right" /></a>
    </section>

    <newsletters />
</template>

<script>
import axios from 'axios';
import ProductItem from '../components/ProductItem.vue';
import Loading from '../components/UI/Loading.vue';
import Newsletters from '../components/Newsletters.vue';

export default {
    name: 'Shop',
    components: {
        ProductItem,
        Loading,
        Newsletters
    },
    data: () => ({
        products: [],
        loading: true,
    }),
    mounted() {
        document.title = "Catalog";
        this.getProducts();
    },
    methods: {
        getProducts() {
            axios.get('/api/products')
            .then(res => {
                this.products = res.data.data;
                setTimeout(() => {
                    this.loading = false;
                }, 500);
            })
        }
    }
}
</script>

<style lang="scss">
#page-header {
    background-image: url("images/default.png");
    width: 100%;
    height: 40vh;
    background-size: cover;
    display: flex;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    padding: 14px;
}
#page-header h2,
#page-header p {
    color: var(--light);;
}
#product-list {
    position: relative;
    width: 100%;
    height: 100%;
}
</style>
