<template>
    <section id="header">
        <h4>Lorem ipsum dolor</h4>
        <h2>Lorem ipsum dolor</h2>
        <h1>Lorem ipsum dolor</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <button>Shop Now</button>
        <div class="header-image"></div>
    </section>

    <section id="first-section" class="section-p1">
        <div class="fi-box">
            <img src="images/default.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fi-box">
            <img src="images/default.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fi-box">
            <img src="images/default.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fi-box">
            <img src="images/default.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fi-box">
            <img src="images/default.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fi-box">
            <img src="images/default.png" alt="">
            <h6>Free Shipping</h6>
        </div>
    </section>

    <section id="products" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="product-container">
            <div class="product" v-for="product in products">
                <img :src="product.image_url" alt="">
                <div class="description">
                    <span>Brand</span>
                    <h5>{{ product.title }}</h5>
                    <div class="star">
                        <fa icon="star" />
                        <fa icon="star" />
                        <fa icon="star" />
                        <fa icon="star" />
                        <fa icon="star" />
                    </div>
                    <h4>${{ product.price }}</h4>
                </div>
                <a href="#"><fa icon="cart-shopping" class="cart" /></a>
            </div>
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
            <div class="product" v-for="product in products">
                <img :src="product.image_url" alt="">
                <div class="description">
                    <span>Brand</span>
                    <h5>{{ product.title }}</h5>
                    <div class="star">
                        <fa icon="star" />
                        <fa icon="star" />
                        <fa icon="star" />
                        <fa icon="star" />
                        <fa icon="star" />
                    </div>
                    <h4>${{ product.price }}</h4>
                </div>
                <a href="#"><fa icon="cart-shopping" class="cart" /></a>
            </div>
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

export default {
    name: 'Index',
    components: {
        Newsletters,
    },
    mounted() {
        document.title = "My Shop";
        this.getProducts();
    },
    data() {
        return {
            products: []
        }
    },
    methods: {
        getProducts() {
            this.axios.get('http://127.0.0.1:8000/api/products')
            .then(res => {
                this.products = res.data.data;
            })
        }
    }
}
</script>

<style lang="scss">
/* Home Page */
#header {
    background-color: var(--bg);
    height: calc(100vh - 56px);
    width: 100%;
    background-size: cover;
    background-position: top 25% right 0;
    padding: 0 80px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    position: relative;
    z-index: -10;
}
#header .header-image {
    background-image: url("images/woman.png");
    width: 50%;
    height: 100%;
    position: absolute;
    background-repeat: no-repeat;
    right: 0;
    top: 0;
    background-size: cover;
    z-index: -5;
}

#header h4 {
    padding-bottom: 15px;
}
#header h1 {
    color: var(--text-hover);
}

#header button {
    background-image: url('images/default.png');
    background-color: transparent;
    color: var(--text-hover);
    border: 0;
    padding: 14px 80px 14px 65px;
    background-repeat: no-repeat;
    cursor: pointer;
    font-weight: 700;
    font-size: 15px;
}

/* First section */
#first-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
#first-section .fi-box {
    width: 180px;
    text-align: center;
    padding: 25px 15px;
    box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
    border: 1px solid var(--border);;
    border-radius: 4px;
    margin: 15px 0;
}
#first-section .fi-box:hover {
    box-shadow: 10px  10px 54px rgba(70, 62, 221, 0.1);
}
#first-section .fi-box h6 {
    padding: 9px 8px 6px 8px;
    line-height: 1;
    border-radius: 4px;
    color: var(--text-hover);
    background-color: #fddde4;
}
#first-section .fi-box img {
    width: 100%;
    margin-bottom: 10px;
}
#first-section .fi-box:nth-child(2) h6 {
    background-color: #cdebbc;
}
#first-section .fi-box:nth-child(3) h6 {
    background-color: #d1e8f2;
}
#first-section .fi-box:nth-child(4) h6 {
    background-color: #cdd4f8;
}
#first-section .fi-box:nth-child(5) h6 {
    background-color: #f6dbf6;
}
#first-section .fi-box:nth-child(6) h6 {
    background-color: #fff2e5;
}

/* Products */
#products {
    text-align: center;
}
#products .product-container {
    display: flex;
    justify-content: space-between;
    padding-top: 20px;
    flex-wrap: wrap;
}
#products .product {
    width: 23%;
    min-width: 250px;
    padding: 10px 12px;
    border: 1px solid var(--border);;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
    margin: 15px 0;
    transition: 0.2s ease;
    position: relative;
}
#products .product:hover {
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
}
#products .product img {
    width: 100%;
    border-radius: 20px;
}
#products .product .description {
    text-align: start;
    padding: 10px 0;
}
#products .product .description span {
    color: #606063;
    font-size: 12px;
}
#products .product .description h5 {
    padding-top: 7px;
    color: #1a1a1a;
    font-size: 14px;
}
#products .product .description i {
    font-size: 12px;
    color: rgb(243, 181, 25);
}
#products .product .description h4 {
    padding-top: 7px;
    font-size: 15px;
    font-weight: 700;
    color: var(--text-hover);
}
#products .product .cart {
    width: 30px;
    height: 30px;
    line-height: 40px;
    border-radius: 50px;
    background-color: #e8f6ea;
    color: var(--text-hover);
    border: 1px solid var(--border);;
    position: absolute;
    bottom: 20px;
    right: 10px;
    padding: 10px;
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
    min-width: 580px;
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
    #first-section {
        justify-content: center;
    }
    #first-section .fi-box {
        margin: 15px 15px;
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
        min-width: 100%;
        height: 30vh;
    }
    #banner3 {
        padding: 0 40px;
    }
    #banner3 .banner-box {
        min-width: 28%;
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
    #first-section {
        justify-content: space-between;
    }
    #first-section .fi-box {
        width: 155px;
        margin: 0 0 15px 0;
    }
    #products .product {
        width: 100%;
    }
    #banner {
        height: 40vh;
    }
    #sm-banner .banner-box {
        height: 40vh;
    }
    #sm-banner .banner-box2 {
        margin-top: 20px;
    }
    #banner3 {
        padding: 0 20px;
    }
    #banner3 .banner-box{
        width: 100%;
    }
}
</style>
