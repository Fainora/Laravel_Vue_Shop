<template>
    <section id="page-header">
        <h2>Shop</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="products" class="section-p1">
        <div class="product-container">
            <div class="product" onclick="window.location.href='product.html';"
                v-for="product in products">
                <img :src="product.image_url" alt="">
                <div class="description">
                    <span>Brand</span>
                    <h5>{{ product.title }}</h5>
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

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
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
export default {
    name: 'Shop',
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
#pagination {
    text-align: center;
}
#pagination a {
    text-decoration: none;
    background-color: var(--text-hover);
    padding: 15px 20px;
    border-radius: 4px;
    color: var(--light);;
    font-weight: 600;
}
</style>
