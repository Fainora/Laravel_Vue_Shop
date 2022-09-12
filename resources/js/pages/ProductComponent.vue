<template>

    <div v-if="!not_found">
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img :src="'/storage/' + product.preview_image" :style="{width: '100%'}" id="MainImage" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img :src="'/storage/' + product.preview_image" :style="{width: '100%'}" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="/images/default.png" :style="{width: '100%'}" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="/images/default.png" :style="{width: '100%'}" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="/images/default.png" :style="{width: '100%'}" class="small-img" alt="">
                    </div>
                </div>
            </div>

            <div class="single-pro-details">
                <h6>Home / {{ product.title }}</h6>
                <h4>{{ product.title }}</h4>
                <h2>${{ product.price }}</h2>
                <select>
                    <option>Select Size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>Small</option>
                    <option>Large</option>
                </select>
                <input type="number" value="1">
                <button class="normal">Add To Cart</button>
                <h4>{{ product.description }}</h4>
                <span>{{ product.content }}</span>
            </div>
        </section>
    </div>
    <div v-else>
        <h3>Продукт не найден</h3>
    </div>

    <section id="products" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="product-container">
            <product-item
                v-for="product in products"
                :title="product.title"
                :image_url="'/' + product.image_url"
                :price="product.price"
            />
        </div>
    </section>


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
</template>

<script>
import axios from 'axios';
import ProductItem from '../components/ProductItem.vue';

export default {
    name: 'Product',
    components: {
        ProductItem,
    },
    data: () => ({
        product: [],
        products: [],
        not_found: false,
    }),
    mounted() {
        document.title = this.product.title;
        this.getProduct(this.$route.params.id);
        this.getProducts();
    },
    methods: {
        getProduct(id) {
            axios.get(`/api/products/${id}`)
            .then(res => {
                this.product = res.data;
            })
            .catch(err => {
                this.not_found = true;
            });
        },
        getProducts() {
            axios.get('/api/products')
            .then(res => {
                this.products = res.data.data;
            })
        }
    }
}
</script>

<style lang="scss">
#prodetails {
    display: flex;
    margin-top: 20px;
}
#prodetails .single-pro-image {
    width: 40%;
    margin-right: 50px;
}
.small-img-group {
    display: flex;
    justify-content: space-between;
}
.small-img-col {
    flex-basis: 24%;
    cursor: pointer;
}
#prodetails .single-pro-details {
    width: 50%;
    padding-top: 30px;
}
#prodetails .single-pro-details h4 {
    padding: 40px 0 20px 0;
}
#prodetails .single-pro-details h2 {
    font-size: 26px;
}
#prodetails .single-pro-details select {
    display: block;
    padding: 5px 10px;
    margin-bottom: 10px;
}
#prodetails .single-pro-details input {
    width: 50px;
    height: 47px;
    padding-left: 10px;
    font-size: 16px;
    margin-right: 10px;
}
#prodetails .single-pro-details input:focus {
    outline: none;
}
#prodetails .single-pro-details button {
    background-color: var(--text-hover);
    color: var(--light);;
}
#prodetails .single-pro-details span {
    line-height: 25px;
}

</style>
