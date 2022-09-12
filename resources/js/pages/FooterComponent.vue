<template>
    <footer class="section-p1">
        <div class="col">
            <!-- <img class="logo" src="images/logo.png" alt=""> -->
            <h2>Logo</h2>
            <h4>Contact</h4>
            <p><strong>Address:</strong> 123 Road, Street 10, Moscow</p>
            <p><strong>Phone:</strong> +7(912)345-67-89</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <!-- <img src="images/pay/app.jpg" alt="">
                <img src="images/pay/play.jpg" alt=""> -->
            </div>
            <p>Secured Payment Gateways</p>
            <!-- <img src="images/pay/pay.png" alt=""> -->
        </div>

        <div class="copyright">
            <p>2022, Шаблон Html</p>
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
}
footer .col{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 20px;
}
footer .logo {
    margin-bottom: 30px;
}
footer h4 {
    font-size: 14px;
    padding-bottom: 20px;
}
footer p {
    font-size: 13px;
    margin: 0 0 8px 0;
}
footer a {
    font-size: 13px;
    text-decoration: none;
    color: #222;
    margin-bottom: 10px;
}

footer .follow {
    margin-top: 20px;
}
footer .follow i{
    color: var(--additional);
    padding-right: 4px;
    cursor: pointer;
}
footer .follow i:hover,
footer a:hover {
    color: var(--text-hover);
}
footer .install .row img {
    border: 1px solid var(--text-hover);
    border-radius: 6px;
}
footer .install img {
    margin: 10px 0 15px 0;
}
footer .copyright {
    width: 100%;
    text-align: center;
}
</style>
