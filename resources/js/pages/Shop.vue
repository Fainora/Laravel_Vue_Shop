<template>
    <section id="page-header" class="shop-header" :style="bgImage">
        <h2>Shop</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="shop" class="section-p1">
        <div class="breadcrumbs">
            Home / <span>Shop</span>
        </div>
        <div id="wrapper">
            <div id="filter">
                <div id="categories" class="box">
                    <h4>Categories</h4>
                    <ul>
                        <li v-for="category in categories">
                            {{ category.title }}
                        </li>
                    </ul>
                </div>
                <div id="price-range" class="box">
                    <h4>Price range</h4>
                    <label for="customRange2" class="form-label">Example range</label>
                    <input type="range" class="form-range" min="0" max="10" id="customRange2">
                </div>
                <div id="colors" class="box">
                    <h4>Colors</h4>
                    <div class="palette">
                        <div v-for="color in colors" class="color" :style="`background: ${ color.color_hex };`"></div>
                    </div>
                </div>
                <div id="brands" class="box">
                    <h4>Brands</h4>
                    <div class="checkbox">
                        <input type="checkbox" id="Nike" name="Nike" class="checkbox-custom" >
                        <label for="Nike" class="label-custom">Nike</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="Active" name="Active" class="checkbox-custom" >
                        <label for="Active" class="label-custom">Active</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="Lacoste" name="Lacoste" class="checkbox-custom" >
                        <label for="Lacoste" class="label-custom">Lacoste</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="Chanel" name="Chanel" class="checkbox-custom" >
                        <label for="Chanel" class="label-custom">Chanel</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="Addidas" name="Addidas" class="checkbox-custom" >
                        <label for="Addidas" class="label-custom">Addidas</label>
                    </div>
                </div>
                <div id="sizes" class="box">
                    <h4>Sizes</h4>
                    <div class="checkbox">
                        <input type="checkbox" id="xs" name="xs" class="checkbox-custom" >
                        <label for="xs" class="label-custom">XS</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="s" name="s" class="checkbox-custom" >
                        <label for="s" class="label-custom">S</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="m" name="m" class="checkbox-custom" >
                        <label for="m" class="label-custom">M</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="l" name="l" class="checkbox-custom" >
                        <label for="l" class="label-custom">L</label>
                    </div>
                </div>
            </div>

            <div id="products">
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
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><fa icon="arrow-right" /></a>
    </section>

    <newsletters />
</template>

<script>
import axios from 'axios';
import ProductItem from '../components/ProductItem.vue';
import Loading from '../components/UI/Loading.vue';
import Newsletters from '../components/Newsletters.vue';

export default {
    name: 'Shop',
    components: {
        ProductItem,
        Loading,
        Newsletters
    },
    data: () => ({
        products: [],
        loading: true,
        categories: [],
        colors: [],
    }),
    mounted() {
        document.title = "Catalog";
        this.getProducts();
        this.getCategories();
        this.getColors();
    },
    methods: {
        getProducts() {
            axios.get('/api/products')
            .then(res => {
                this.products = res.data.data.slice(0, 12);
                this.loading = false;
            })
        },
        getCategories() {
            axios.get('/api/categories')
            .then(res => {
                this.categories = res.data.data;
            })
        },
        getColors() {
            axios.get('/api/colors')
            .then(res => {
                this.colors = res.data.data;
            })
        },
    },
    computed: {
        bgImage() {
            return `background-image: url("images/product/banner.jpg")`;
        }
    }
}
</script>

<style lang="scss" scoped>
.shop-header {
    h2,
    p {
        color: var(--dark);
    }
}

#shop {
    .breadcrumbs {
        margin: 15px 0;
        font-size: 16px;

        span {
            color: var(--text-hover);
            font-weight: 500;
        }
    }

    #wrapper {
        display: flex;

        #filter {
            margin-top: 20px;
            width: 250px;
            margin-right: 20px;

            h4 {
                margin-bottom: 20px;
                color: var(--text-hover);
            }

            #categories {
                ul {
                    padding: 0;
                    margin-bottom: 0;

                    li {
                        list-style-type: none;
                        margin-bottom: 10px;
                    }

                    li:last-child {
                        margin-bottom: 0;
                    }
                }
            }

            #colors {
                .palette {
                    display: flex;
                    flex-wrap: wrap;

                    .color {
                        width: 22px;
                        height: 22px;
                        border-radius: 100%;
                        cursor: pointer;
                        margin-right: 8px;
                        margin-bottom: 10px;
                        border: 1px solid #dbdbdb;
                    }
                }
            }

            .checkbox {
                position: relative;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                margin-bottom: 10px;

                .label-custom {
                    font-size: 16px;
                    font-weight: 400;
                    margin: 0;
                    padding-left: 30px;
                    cursor: pointer;
                }

                .label-custom::before {
                    content: '';
                    display: block;
                    height: 20px;
                    width: 20px;
                    background-color: #E6E6E6;
                    position: absolute;
                    top: 0;
                    left: 0;
                    z-index: 1;
                    transition: background-color 0.2s linear;
                }

                .label-custom::after {
                    content: '✓';
                    color: var(--light);
                    display: block;
                    position: absolute;
                    top: -2px;
                    left: 4px;
                    z-index: 2;
                    opacity: 0;
                    transition: opacity 0.2s linear;
                }

                .checkbox-custom {
                    -webkit-appearance: none;
                    appearance: none;
                    position: absolute;
                    margin: 0 10px 10px 0;
                }

                .checkbox-custom:checked + .label-custom::before {
                    background-color: var(--text-hover);
                }
                .checkbox-custom:checked + .label-custom::after {
                    opacity: 1;
                }
            }
            .checkbox:last-child {
                margin-bottom: 0;
            }
        }
        .box {
            padding: 30px;
            background-color: var(--light);
            margin-bottom: 20px;
        }
    }
    #products {
        position: relative;
        width: 100%;
        height: 100%;

        .product {
            margin-top: 0;
            margin-bottom: 20px;
        }
        #product-list {
            width: 100%;
            height: 100%;
        }
    }
}
</style>
