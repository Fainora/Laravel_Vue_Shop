<template>
    <a :href="'/product/' + id" class="product">
        <div class="image">
            <img :src="'/storage/' + image_url" :alt="title">
        </div>
        <div class="description">
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
        <a @click.prevent="addToCart(id, title, image_url, price)" href="#"><fa icon="cart-shopping" class="cart" /></a>
    </a>
</template>

<script>
export default {
    props: {
        id: {
            type: Number,
        },
        title: {
            type: String,
        },
        image_url: {
            type: String,
            default: 'images/nophoto.svg'
        },
        price: {
            type: Number,
            default: 0
        }
    },
    mounted() {
        //document.title = 'Продукт';
    },
    methods: {
        addToCart(id, title, image_url, price) {
            let cart = localStorage.getItem('cart');
            let newProduct = [
                {
                    'id': id,
                    'quantity': 1,
                    'title': title,
                    'image_url': image_url,
                    'price': price
                }
            ]

            if(!cart) {
                localStorage.setItem('cart', JSON.stringify(newProduct));
            } else {
                cart = JSON.parse(cart);
                cart.forEach(productInCart => {
                    if(productInCart.id === id) {
                        productInCart.quantity = Number(productInCart.quantity) + 1;
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

.product {
    width: 23%;
    min-width: 250px;
    padding: 10px 12px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
    margin: 15px 0;
    transition: 0.2s ease;
    position: relative;
    background-color: var(--light);
    text-decoration: none;
    color: var(--text);

    .image {
        height: 300px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;

        img {
            height: 100%;
            width: auto;
        }
    }

    .description {
        text-align: start;
        padding: 10px 0;

        span {
            color: #606063;
            font-size: 12px;
        }

        .star {
            color: #ebd741;
        }

        h4 {
            padding-top: 7px;
            font-size: 18px;
            font-weight: 500;
            color: var(--text-hover);
        }

        h5 {
            padding-top: 7px;
            color: #1a1a1a;
            font-size: 14px;
        }

        i {
            font-size: 12px;
            color: rgb(243, 181, 25);
        }
    }

    .cart {
        width: 30px;
        height: 30px;
        line-height: 40px;
        border-radius: 50px;
        border: 1px solid var(--text-additional);
        color: var(--text-additional);
        position: absolute;
        bottom: 20px;
        right: 10px;
        padding: 10px;
    }

    .cart:hover {
        color: var(--text-hover);
        border: 1px solid var(--text-hover);
    }
}

.product:hover {
    -webkit-box-shadow: 0px 10px 10px 0px rgba(34, 60, 80, 0.1);
    -moz-box-shadow: 0px 10px 10px 0px rgba(34, 60, 80, 0.1);
    box-shadow: 0px 10px 10px 0px rgba(34, 60, 80, 0.1);
    transform: translateY(-15px);
    color: var(--text);
}

</style>
