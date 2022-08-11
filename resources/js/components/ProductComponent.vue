<template>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images/products/f1.jpg" width="100%" id="MainImage" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="images/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / T-Shirt</h6>
            <h4>Men's Fashion T Shirt</h4>
            <h2>$139.00</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto dolore, accusantium modi, esse consectetur sit aspernatur quis labore ad cum soluta eos illum delectus eum. Doloremque quae eos culpa perferendis!</span>
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
                    <h5>{{ product.title }}s</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>${{ product.price }}</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
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
export default {
    name: 'Product',
    mounted() {
        this.getProducts()
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
