<template>

    <div v-if="!not_found">
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img :src="`/storage/${product.preview_image}`" :style="{width: '100%'}" id="MainImage" :alt="title">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img :src="`/storage/${product.preview_image}`" :style="{width: '100%'}" class="small-img" alt="">
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
                <input type="number" id="quantity" value="1" min="0" max="100" />
                <button @click.prevent="addToCart(product)" class="normal">Add To Cart</button>
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
            <div id="product-list" v-if="loading" >
                <loading />
            </div>
            <product-item v-else
                v-for="product in products"
                :id="product.id"
                :title="product.title"
                :image_url="product.image_url"
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
import Loading from '../components/UI/Loading.vue';

export default {
    name: 'Product',
    components: {
        ProductItem,
        Loading,
    },
    data: () => ({
        product: [],
        products: [],
        not_found: false,
        loading: true,
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
                this.loading = false;
            })
        },
        addToCart(product) {
            let cart = localStorage.getItem('cart');
            let qty = Number(document.getElementById('quantity').value) ?? 1;

            let newProduct = [
                {
                    'id': product.id,
                    'quantity': qty,
                    'title': product.title,
                    'image_url': product.preview_image,
                    'price': product.price,
                }
            ]

            if(!cart) {
                localStorage.setItem('cart', JSON.stringify(newProduct));
            } else {
                cart = JSON.parse(cart);
                cart.forEach(productInCart => {
                    if(productInCart.id === product.id) {
                        productInCart.quantity = Number(productInCart.quantity) + Number(qty);
                        newProduct = null;
                    }
                })
                Array.prototype.push.apply(cart, newProduct);
                localStorage.setItem('cart', JSON.stringify(cart));
            }
        }
    }
}
</script>

<style lang="scss">
#prodetails {
    display: flex;
    margin-top: 20px;

    .single-pro-image {
        width: 40%;
        margin-right: 50px;
    }

    .single-pro-details {
        width: 50%;
        padding-top: 30px;

        h4 {
            padding: 40px 0 20px 0;
        }

        h2 {
            font-size: 26px;
        }

        select {
            display: block;
            padding: 5px 10px;
            margin-bottom: 10px;
        }

        input {
            width: 50px;
            height: 47px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        input:focus {
            outline: none;
        }

        button {
            background-color: var(--text-hover);
            color: var(--light);;
        }

        span {
            line-height: 25px;
        }
    }
}

.small-img-group {
    display: flex;
    justify-content: space-between;
}
.small-img-col {
    flex-basis: 24%;
    cursor: pointer;
}
</style>
