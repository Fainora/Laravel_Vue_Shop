<template>
    <div class="blog-box">
        <div class="blog-img">
            <img :src="image" alt="">
        </div>
        <div class="blog-details">
            <p>id: {{ post.id }}</p>
            <h4>{{ post.title }}</h4>
            <p>{{ post.body }}</p>
            <h1>13/01</h1>
            <a :href="(`/blog/post/${post.id}`)"
                :post="post">
                CONTINUE READING
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                image: `/images/blog/${this.post.id}.webp`,
            }
        },
        props: {
            post: {
                type: Object,
                required: true,
            }
        }
    }
</script>

<style lang="scss">
#blog .blog-box {
    display: flex;
    align-items: center;
    width: 100%;
    position: relative;
    padding-bottom: 90px;
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
</style>
