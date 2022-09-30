<template>
    <footer class="section-p1">
        <div class="col">
            <div class="logo">
                <a href="/"><h3><strong><fa icon="fa-brands fa-shopify" /> Shop</strong></h3></a>
            </div>
            <h4><router-link to="/contact">Contact</router-link></h4>
            <p><strong>Address:</strong> 123 Road, Street 10, Moscow</p>
            <p><strong>Phone:</strong> +7(912)345-67-89</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <a href="https://www.facebook.com/" class="social_icon facebook"><fa icon="fab fa-facebook-f"></fa></a>
                    <a href="https://twitter.com/" class="social_icon twitter"><fa icon="fab fa-twitter"></fa></a>
                    <a href="https://www.instagram.com/" class="social_icon instagram"><fa icon="fab fa-instagram"></fa></a>
                    <a href="https://pinterest.com/" class="social_icon pinterest"><fa icon="fab fa-pinterest-p"></fa></a>
                    <a href="https://www.youtube.com/" class="social_icon youtube"><fa icon="fab fa-youtube"></fa></a>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <router-link to="/about">About us</router-link>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <router-link to="/contact">Contact Us</router-link>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <router-link to="/login">Sign In</router-link>
            <router-link to="/cart">View Cart</router-link>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <a href="https://www.apple.com/"><img src="images/pay/app.jpg" alt=""></a>
                <a href="https://play.google.com/"><img src="images/pay/play.jpg" alt=""></a>
            </div>
            <p>Secured Payment Gateways</p>
            <img src="images/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>2022, My Shop</p>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'Footer',
}
</script>

<style lang="scss" scoped>
footer {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    cursor: default;

    .col{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .logo {
        margin-bottom: 20px;

        a:hover {
            color: var(--text);
        }
    }

    h4 {
        font-size: 14px;
        padding-bottom: 15px;
        font-weight: 700;
        margin-bottom: 0;
    }

    p {
        font-size: 13px;
        margin: 0 0 8px 0;
    }

    a {
        font-size: 13px;
        text-decoration: none;
        color: #222;
        margin-bottom: 10px;
    }

    .follow {
        margin-top: 20px;

        i{
            color: var(--additional);
            padding-right: 4px;
            cursor: pointer;
        }
        .icon {
            width: 100%;
            display:flex;
            align-items:center;
            justify-content:center;

            a:hover {
                color: var(--text);
            }

            .social_icon {
                display:flex;
                align-items:center;
                justify-content:center;
                width: 30px;
                height: 30px;
                margin-right: 10px;
                background-color: var(--bg);
                border-radius: 50%;
                box-shadow: 0px 0px 3px #1e1e1e80;
                transition: all 0.3s ease;
                position: relative;
                overflow:hidden;

                svg {
                    font-size: 16px;
                    color: var(--text);
                    transition: all 0.3s ease;
                    z-index: 1;
                }

                &:last-child {
                    margin-right: 0;
                }

                &:after{
                    content: "";
                    width: 30px;
                    height: 30px;
                    position:absolute;
                    transform: translate(0, 31px);
                    border-radius: 50%;
                    transition: all 0.3s ease;
                }

                &:hover {
                    transform: translateY(-4px);
                    box-shadow: 0px 0px 8px #00000080;

                    svg{
                        color: #fff;
                    }

                    &:after{
                        transform: translate(0);
                    }
                }
            }

            .facebook:after{
                background-color: #2374E1;
            }
            .twitter:after{
                background-color: #1D9BF0;
            }
            .instagram:after{
                background: #dc2743;
                background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
            }
            .pinterest:after{
                background-color: #CC0000;
            }
            .youtube:after{
                background-color: #FF0000;
            }
        }
    }

    a:hover {
        color: var(--text-hover);
    }

    .row {
        margin: 0;

        a{
            margin: 0;
            padding: 0;
        }
    }

    .install {
        img {
            margin: 10px 0;
        }
        .row img {
            width: 180px;
            padding: 0;
        }
    }

    .copyright {
        width: 100%;
        text-align: center;
    }
}
</style>
