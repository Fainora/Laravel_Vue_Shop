<template>
    <section id="page-header" class="blog-header">
        <h2>Blog</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/default.png" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quis atque beatae similique, error quisquam libero facere
                    a impedit id expedita minus, suscipit consequatur doloribus, ut accusantium. Eveniet, vitae eligendi!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/default.png" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quis atque beatae similique, error quisquam libero facere
                    a impedit id expedita minus, suscipit consequatur doloribus, ut accusantium. Eveniet, vitae eligendi!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/default.png" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quis atque beatae similique, error quisquam libero facere
                    a impedit id expedita minus, suscipit consequatur doloribus, ut accusantium. Eveniet, vitae eligendi!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/default.png" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quis atque beatae similique, error quisquam libero facere
                    a impedit id expedita minus, suscipit consequatur doloribus, ut accusantium. Eveniet, vitae eligendi!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="images/default.png" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid quis atque beatae similique, error quisquam libero facere
                    a impedit id expedita minus, suscipit consequatur doloribus, ut accusantium. Eveniet, vitae eligendi!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
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
    name: 'Blog'
}
</script>

<style lang="scss" scoped>
#page-header.blog-header {
    background-image: url("images/default.png");
}
#blog {
    padding: 150px 150px 0 150px;
}
#blog .blog-box {
    display: flex;
    align-items: center;
    width: 100%;
    position: relative;
    padding-bottom: 90px;
}
#blog .blog-img {
    width: 50%;
    margin-right: 40px;
}
#blog img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}
#blog .blog-details {
    width: 50%;
}
#blog .blog-details a {
    text-decoration: none;
    font-size: 11px;
    color: var(--dark);;
    font-weight: 700;
    position: relative;
    transition: 0.3s;
}
#blog .blog-details a:after {
    content: "";
    width: 50px;
    height: 1px;
    background-color: var(--dark);;
    position: absolute;
    top: 4px;
    right: -60px;
}
#blog .blog-details a:hover {
    color: var(--text-hover);
}
#blog .blog-details a:hover::after {
    background-color: var(--text-hover);
}
#blog .blog-box h1 {
    position: absolute;
    top: -40px;
    left: 0;
    font-size: 70px;
    font-weight: 700;
    color: #c9cbce;
    z-index: -10;
}
</style>
