<template>
    <section id="newsletter" class="section-p1 section-m1" :style="bgImage">
        <div class="dark"></div>
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
        computed: {
            bgImage() {
                return `background-image: url("images/banners/b14.png")`;
            }
        }
    }
</script>

<style lang="scss">
#newsletter {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
    background-repeat: no-repeat;
    background-position: 20% 30%;
    background-color: #041e42;
    position: relative;
}
.newstext {
    z-index: 1;
}
#newsletter h4 {
    font-size: 22px;
    font-weight: 700;
    color: var(--light);;
}
#newsletter p {
    font-size: 14px;
    font-weight: 600;
    color: var(--light);
}
#newsletter p span {
    color: #ffbd27;
}
#newsletter .form {
    display: flex;
    width: 40%;
    z-index: 1;
}
#newsletter input {
    // height: 3.125rem;
    padding: 0 1.25em;
    font-size: 14px;
    width: 100%;
    border: 1px solid transparent;
    border-radius: 4px;
    outline: none;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
#newsletter button {
    background-color: var(--text-hover);
    color: var(--light);;
    white-space: nowrap;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.dark {
    width: 100%;
    height: 100%;
    background-color: black;
    position: absolute;
    left: 0;
    opacity: 0.3;
    z-index: 0;
}

@media (max-width: 477px) {
    #newsletter {
        padding: 40px 20px;
    }
    #newsletter .form {
        width: 100%;
    }
}
</style>
