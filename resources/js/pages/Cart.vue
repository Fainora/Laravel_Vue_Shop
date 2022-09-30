<template>
    <section id="page-header" class="cart-header" :style="bgImage">
        <h2>Cart</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <transition-group name="product-list">
                    <tr v-for="product in products" :key="product">
                        <td><div @click.prevent="removeProduct(product.id)" class="remove"><fa icon="fa-solid fa-trash"></fa></div></td>
                        <td><img :src="'/storage/' + product.image_url" :alt="product.title"></td>
                        <td>{{ product.title }}</td>
                        <td>${{ product.price }}</td>
                        <td>
                            <div class="input">
                                <span class="minus" @click.prevent="minusQty(product)">-</span>
                                <span class="num">{{ product.quantity }}</span>
                                <span class="plus" @click.prevent="plusQty(product)">+</span>
                            </div>
                        </td>
                        <!-- <td><input type="number" :value="product.quantity"></td> -->
                        <td>${{ product.price * product.quantity }}</td>
                    </tr>
                </transition-group>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ {{ totalPrice }}</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td v-if="totalPrice > 500 || totalSum === 0">Free</td>
                    <td v-else>$ {{ shipping }}</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td v-if="totalPrice > 500 || totalPrice === 0"><strong>$ {{ totalPrice }}</strong></td>
                    <td v-else><strong>$ {{ totalPrice + shipping }}</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>
</template>

<script>
export default {
    name: 'Cart',
    data() {
        return {
            products: [],
            result: [],
            totalSumWithShipping: 0,
            shipping: 5,
        }
    },
    mounted() {
        document.title = "Cart";
        this.getCartProducts();
    },
    methods: {
        getCartProducts() {
            this.products = JSON.parse(localStorage.getItem('cart'));
        },
        removeProduct(id) {
            this.products = this.products.filter(product => {
                return product.id !== id;
            })
            this.updateCart();
        },
        updateCart() {
            localStorage.setItem('cart', JSON.stringify(this.products));
        },
        minusQty(product) {
            if(product.quantity === 1) {
                this.removeProduct(product.id);

                return;
            };
            product.quantity--;
            this.updateCart();
        },
        plusQty(product) {
            product.quantity++;
            this.updateCart();
        },
    },
    computed: {
        totalPrice() {
            let totalPrice = 0;
            console.log(this.products);
            this.products.forEach(product => {
                totalPrice += product.price * product.quantity;
            });

            return totalPrice;
        },
        bgImage() {
            return `background-image: url("images/banners/cart.jpg")`;
        }
    }
}
</script>

<style lang="scss" scoped>
    .cart-header {
        h2,
        p {
            color: var(--dark);
        }
    }
    #cart table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        white-space: nowrap;
    }
    #cart table img {
        width: 70px;
    }
    #cart table td {
        text-align: center;
    }
    #cart table td:nth-child(1) {
        width: 70px;
    }
    #cart table td:nth-child(2) {
        width: 150px;
    }
    #cart table td:nth-child(3) {
        width: 250px;
    }
    #cart table td:nth-child(4),
    #cart table td:nth-child(6) {
        width: 150px;
    }
    #cart table td:nth-child(5) {
        width: 100px;
        padding: 0 15px;
    }
    #cart table thead {
        border: 1px solid var(--border-additional);;
        border-left: none;
        border-right: none;
    }
    #cart table thead td {
        font-weight: 700;
        text-transform: uppercase;
        font-size: 15px;
        padding: 18px 0;
    }
    #cart table tbody tr td {
        padding-top: 15px;
    }
    #cart table tbody td {
        font-size: 14px;
    }
    #cart-add {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    #coupon {
        width: 50%;
        margin-bottom: 30px;
    }
    #coupon h3,
    #subtotal h3 {
        padding-bottom: 15px;
    }
    #coupon input {
        padding: 10px 20px;
        outline: none;
        width: 60%;
        margin-right: 10px;
        border: 1px solid var(--border-additional);
    }
    #coupon button,
    #subtotal button {
        background-color: var(--text-hover);
        color: var(--light);;
        padding: 12px 20px;
    }
    #subtotal {
        width: 50%;
        margin-bottom: 30px;
        border: 1px solid var(--border-additional);
        padding: 30px;
    }
    #subtotal table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }
    #subtotal table td {
        width: 50%;
        border: 1px solid var(--border-additional);
        padding: 10px;
        font-size: 13px;
    }
    .remove {
        cursor: pointer;
    }

    .input {
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--light);
        -webkit-box-shadow: 0px 0px 3px 0px rgba(34, 60, 80, 0.2);
        -moz-box-shadow: 0px 0px 3px 0px rgba(34, 60, 80, 0.2);
        box-shadow: 0px 0px 3px 0px rgba(34, 60, 80, 0.2);
    }
    .input span {
        width: 100%;
        height: 100%;
        font-size: 16px;
        font-weight: 500;
        background-color: #f2705c;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select:none;
    }
    .input span.num {
        background-color: var(--light);
        cursor: default;
    }

    .product-list-item {
    display: inline-block;
    margin-right: 10px;
    }
    .product-list-enter-active,
    .product-list-leave-active {
    transition: all 0.4s ease;
    }
    .product-list-enter-from,
    .product-list-leave-to {
    opacity: 0;
    transform: translateX(130px);
    }

</style>
