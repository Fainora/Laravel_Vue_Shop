<template>
    <section id="header">
        <div class="banner-text">
            <h1>Stylish Clothes</h1>
            <h3>We design stylish and fashionable clothes with very special offers for a different season.</h3>
            <h4>50% off for first 10 buyers!</h4>
            <button>Shop Now</button>
        </div>
        <div class="header-image"></div>
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

    <section id="banner" class="section-m1">
        <h4>Lorem ipsum</h4>
        <h2><span>Lorem </span>ipsum dolor sit amet consectetur adipisicing elit.</h2>
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
        <div class="banner-box">
            <h4>Lorem ipsum</h4>
            <h2>Lorem ipsum</h2>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Lorem ipsum</h4>
            <h2>Lorem ipsum</h2>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>Lorem ipsum</h2>
            <h3>Lorem ipsum dolor sit amet</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>Lorem ipsum</h2>
            <h3>Lorem ipsum dolor sit amet</h3>
        </div>
        <div class="banner-box banner-box3">
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
    z-index: -10;

    .header-image {
        background-image: url("images/woman.png");
        width: 50%;
        height: 100%;
        position: absolute;
        background-repeat: no-repeat;
        right: 7em;
        top: 0;
        background-size: cover;
        z-index: -5;
    }

    .banner-text {
        width: 500px;
    }

    h3 {
        font-weight: 200;
        margin-bottom: 0;
    }

    h4 {
        color: var(--text-hover);
        font-weight: 300;
        margin: 20px 0 25px 0;
    }

    button {
        background-color: var(--text-hover);
        color: var(--light);
        border: 0;
        border-radius: 5px;
        padding: 14px 80px 14px 65px;
        background-repeat: no-repeat;
        cursor: pointer;
        text-transform: uppercase;
        font-size: 15px;
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
    background-image: url("images/default.png");
    width: 100%;
    height: 40vh;
    background-size: cover;
    background-position: center;
}
#banner h4 {
    color: var(--light);;
    font-size: 16px;
}
#banner h2 {
    color: var(--light);;
    font-size: 30px;
    padding: 10px 0;
}
#banner h2 span {
    color: #ef3636;
}
#banner button:hover {
    background: var(--text-hover);
    color: var(--light);;
}
/* Sm-banner */
#sm-banner {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
#sm-banner .banner-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background-image: url("images/banners/banner1.webp");
    min-width: 550px;
    height: 50vh;
    background-size: cover;
    background-position: center;
    padding: 30px;
}
#sm-banner .banner-box2 {
    background-image: url("images/banners/banner2.jpeg");
}
#sm-banner h4 {
    color: var(--light);;
    font-size: 20px;
    font-weight: 300;
}
#sm-banner h2 {
    color: var(--light);;
    font-size: 28px;
    font-weight: 800;
}
#sm-banner span {
    color: var(--light);;
    font-size: 14px;
    font-weight: 500;
    padding-bottom: 15px;
}
#sm-banner .banner-box:hover button {
    background: var(--text-hover);
    border: 1px solid var(--text-hover);
}

#banner3 {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 80px;
}
#banner3 .banner-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background-image: url("images/banners/banner3.jpeg");
    min-width: 30%;
    height: 30vh;
    background-size: cover;
    background-position: center;
    padding: 20px;
    margin-bottom: 20px;
}
#banner3 .banner-box2 {
    background-image: url("images/banners/banner4.jpeg");
}
#banner3 .banner-box3 {
    background-image: url("images/banners/banner5.jpeg");
}
#banner3 h2 {
    color: var(--light);;
    font-weight: 900;
    font-size: 22px;
}
#banner3 h3 {
    color: #ec544e;
    font-weight: 800;
    font-size: 15px;
}

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

/* Start Media Query */
@media (max-width: 799px) {
    #header {
        padding: 0 80px;
        background-position: top 30% right 30%;
    }
    #header .header-image {
        width: 100%;
        right: -200px;
    }
    #products .product-container {
        justify-content: center;
    }
    #products .product {
        margin: 15px;
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
    }
    #header .header-image {
        right: -70px;
    }
    #products .product {
        width: 100%;
    }
    #banner {
        height: 40vh;
    }
    #sm-banner .banner-box {
        height: 40vh;
        margin-bottom: 20px;
    }

    #sm-banner, #banner3 {
        padding: 0 20px;
    }

}
</style>
