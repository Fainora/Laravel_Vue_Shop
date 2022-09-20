<template>
    <div class="product">
        <div class="image">
            <img :src="image_url" alt="">
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
        <a href="#"><fa icon="cart-shopping" class="cart" /></a>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            default: 'NULL'
        },
        image_url: {
            type: String,
            default: 'images/nophoto.svg'
        },
        price: {
            type: Number,
            default: 0
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
}

.product img {
    width: 100%;
    border-radius: 20px;
}
</style>
