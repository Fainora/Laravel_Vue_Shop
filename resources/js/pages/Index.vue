<template>
    <section id="header">
        <div class="banner-text">
            <h1>Stylish Clothes</h1>
            <h3>We design stylish and fashionable clothes with very special offers for a different season.</h3>
            <h4>50% off for first 10 buyers!</h4>
            <router-link to="/shop">Shop Now</router-link>
        </div>
        <div class="header-image" :style="bgImage"></div>
    </section>

    <icon-section />

    <section id="products" class="section-p1">
        <h2>Our Products</h2>
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

    <section id="banner" class="section-m1" :style="bgImageBanner">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="products" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="product-container">
            <div id="product-list" v-if="loading" >
                <loading />
            </div>
            <product-item v-else
                v-for="product in new_products"
                :id="product.id"
                :title="product.title"
                :image_url="product.image_url"
                :price="product.price"
            />
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box" :style="bgImageBannerFirst">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic suits are sold in our shop.</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2" :style="bgImageBannerSecond">
            <h4>spring/autumn</h4>
            <h2>upcomming season</h2>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box" :style="bgImageBannerThird">
            <h2>SEASON SALE</h2>
            <h3>Lorem ipsum dolor sit amet</h3>
        </div>
        <div class="banner-box banner-box2" :style="bgImageBannerFourth">
            <h2>NEW COLLECTION</h2>
            <h3>Lorem ipsum dolor sit amet</h3>
        </div>
        <div class="banner-box banner-box3" :style="bgImageBannerFifth">
            <h2>Lorem ipsum</h2>
            <h3>Lorem ipsum dolor sit amet</h3>
        </div>
    </section>

    <newsletters />

</template>

<script>
import axios from 'axios';
import Newsletters from '../components/Newsletters.vue';
import IconSection from '../components/IconSection.vue';
import ProductItem from '../components/ProductItem.vue';
import Loading from '../components/UI/Loading.vue';

export default {
    name: 'Index',
    components: {
        Newsletters,
        IconSection,
        ProductItem,
        Loading,
    },
    data() {
        return {
            products: [],
            new_products: [],
            loading: true,
        }
    },
    mounted() {
        document.title = "My Shop";
        this.getProducts();
        this.getNewProducts();
    },
    methods: {
        getProducts() {
            this.axios.get('http://127.0.0.1:8000/api/products')
            .then(res => {
                this.products = res.data.data.slice(0, 8);
                this.loading = false;
            })
        },
        getNewProducts() {
            this.axios.get('http://127.0.0.1:8000/api/products')
            .then(res => {
                this.new_products = res.data.data.slice(-8);
                this.loading = false;
            })
        }
    },
    computed: {
        bgImage() {
            return `background-image: url("images/woman.png")`;
        },
        bgImageBanner() {
            return `background-image: url("images/banners/banner.png")`;
        },
        bgImageBannerFirst() {
            return `background-image: url("images/banners/b1.png");`
        },
        bgImageBannerSecond() {
            return `background-image: url("images/banners/b2.png");`
        },
        bgImageBannerThird() {
            return `background-image: url("images/banners/b3.png");`
        },
        bgImageBannerFourth() {
            return `background-image: url("images/banners/b4.png");`
        },
        bgImageBannerFifth() {
            return `background-image: url("images/banners/b5.png");`
        },
    }
}
</script>

<style lang="scss">
    /* Home Page */
    #header {
        background-color: var(--light);
        height: calc(100vh - 56px);
        width: 100%;
        padding: 0 10em;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        position: relative;
        z-index: 0;

        .header-image {
            width: 50%;
            height: 100%;
            position: absolute;
            background-repeat: no-repeat;
            right: 1em;
            top: 0;
            background-size: cover;
            z-index: -5;
        }

        .banner-text {
            width: 500px;

            a {
                background-color: var(--text-hover);
                color: var(--light);
                border: 0;
                border-radius: 5px;
                padding: 19px 80px 19px 65px;
                background-repeat: no-repeat;
                cursor: pointer;
                text-transform: uppercase;
                font-size: 15px;
                text-decoration: none;
            }

            h3 {
                font-weight: 200;
                margin-bottom: 0;
            }

            h4 {
                color: var(--text-hover);
                font-weight: 300;
                margin: 20px 0 45px 0;
            }
        }
    }

    /* Products */
    #products {
        text-align: center;

        .product-container {
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            flex-wrap: wrap;
        }
    }

    /* Banner */
    #banner {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: #060F1E;
        width: 100%;
        height: 40vh;
        background-size: cover;
        background-position: center;

        h4 {
            color: var(--light);;
            font-size: 16px;
        }

        h2 {
            color: var(--light);;
            font-size: 30px;
            padding: 10px 0;

            span {
                color: #ef3636;
            }
        }
        button:hover {
            background: var(--text-hover);
            color: var(--light);;
        }
    }

    /* Sm-banner */
    #sm-banner {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;

        .banner-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            min-width: 550px;
            height: 50vh;
            background-size: cover;
            background-position: center;
            padding: 30px;

            &:hover button {
                background: var(--text-hover);
                border: 1px solid var(--text-hover);
            }
        }

        h4 {
            color: var(--light);
            font-size: 20px;
            font-weight: 300;
        }

        h2 {
            color: var(--light);
            font-size: 28px;
            font-weight: 800;
        }

        span {
            color: var(--light);
            font-size: 16px;
            font-weight: 500;
            padding-bottom: 15px;
        }
    }

    #sm-banner h4,
    #sm-banner h2,
    #sm-banner span,
    #banner3 h2,
    #banner3 h3 {
        text-shadow: 0px 0px 3px rgba(150, 150, 150, 1);
    }
    /* 3-banner */
    #banner3 {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 80px;

        .banner-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            min-width: 30%;
            height: 30vh;
            background-size: cover;
            background-position: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        h2 {
            color: var(--light);;
            font-weight: 900;
            font-size: 22px;
        }

        h3 {
            color: #ec544e;
            font-weight: 800;
            font-size: 15px;
        }
    }

    /* Start Media Query */
    @media (max-width: 1280px) {
        #header {
            .banner-text {
                width: 430px;
            }
            .header-image {
                right: 2em;
            }
        }

        #sm-banner .banner-box {
            min-width: 450px;
        }
    }

    @media (max-width: 1100px) {
        #header {
            .banner-text {
                width: 380px;
            }
            .header-image {
                right: 0;
            }
        }

        #sm-banner .banner-box {
            min-width: 400px;
        }
    }

    @media (max-width: 980px) {
        #sm-banner .banner-box {
            min-width: 100%;
            height: 30vh;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 799px) {
        #header {
            padding: 0 80px;
            background-position: top 30% right 30%;

            .header-image {
                width: 100%;
                right: -200px;
            }
        }

        #products {
            .product-container {
                justify-content: center;
            }
            .product {
                margin: 15px;
            }
        }

        #banner {
            height: 20vh;
        }

        #sm-banner .banner-box {
            margin-bottom: 0;
        }

        #banner3 .banner-box {
            width: 100%;
        }

        #newsletter .form {
            width: 70%;
        }
    }

    @media (max-width: 477px) {
        #header {
            padding: 0 20px;
            background-position: 60%;

            .header-image {
                right: -70px;
            }
        }

        #products .product {
            width: 100%;
        }

        #banner {
            height: 40vh;
        }

        #sm-banner {
            .banner-box {
                height: 40vh;
                margin-bottom: 20px;
            }

            #banner3 {
                padding: 0 20px;
            }
        }
    }
</style>
