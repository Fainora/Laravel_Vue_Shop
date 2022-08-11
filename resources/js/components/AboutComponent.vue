<template>
    <section id="page-header" class="about-header">
        <h2>About Us</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="images/default.png" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, magni perspiciatis inventore fuga eveniet explicabo,
                suscipit, ad eaque beatae velit provident fugiat dolorum dolore quos exercitationem sint et nobis facere!</p>

            <abbr title="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, nemo libero! Eveniet molestias animi iste.
                Quaerat dolor nemo deserunt eveniet quisquam, eos iusto repellendus porro labore dignissimos quas praesentium dolorum.</abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas possimus quia cupiditate
                vel itaque blanditiis excepturi consectetur nemo nesciunt amet repellat officia beatae, aspernatur a aperiam eligendi minima, magni ex.</marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="images/about/1.mp4"></video>
        </div>
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
    name: 'About'
}
</script>

<style lang="scss" scoped>
#page-header.about-header {
    background-image: url("images/default.png");
}
#about-head {
    display: flex;
    align-items: center;
}
#about-head img {
    width: 50%;
    height: auto;
}
#about-head div {
    padding-left: 40px;
}
#about-app {
    text-align: center;
}
#about-app .video {
    width: 70%;
    height: 100%;
    margin: 30px auto 0 auto;
}
#about-app .video video {
    width: 100%;
    height: 100%;
    border-radius: 20px;
}
.video {
    background-color: var(--bg);
}
</style>
