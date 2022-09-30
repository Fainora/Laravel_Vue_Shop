<template>
    <section id="page-header" class="about-header" :style="bgImage">
        <h2>About Us</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="images/about/about-main.jpeg" alt="">
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
            <video controls>
                <source src="images/about/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <icon-section />

    <newsletters />
</template>

<script>
    import Newsletters from '../components/Newsletters.vue';
    import IconSection from '../components/IconSection.vue';

    export default {
        name: 'About',
        components: {
            Newsletters,
            IconSection,
        },
        mounted() {
            document.title = "About";
        },
        computed: {
            bgImage() {
                return `background-image: url("images/about/banner.png")`;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .about-header {
        h2, p {
            color: var(--light);;
        }
    }
    #about-head {
        display: flex;
        align-items: center;

        img {
            width: 50%;
            height: auto;
        }

        div {
            padding-left: 40px;
        }
    }

    #about-app {
        text-align: center;

        .video {
            width: 70%;
            height: 100%;
            margin: 30px auto 0 auto;
            background-color: var(--bg);

            video {
                width: 100%;
                height: 100%;
                border-radius: 20px;
            }
        }
    }

</style>
