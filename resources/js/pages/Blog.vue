<template>
    <section id="page-header" class="blog-header" :style="bgImage">
        <h2>Blog</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="blog">
        <post-list
            v-if="!isPostsLoading"
            :posts="posts"
        />

        <div v-else><loading /></div>
    </section>

    <section id="pagination" class="section-p1">
        <a v-for="pageNumber in totalPages"
            :key="pageNumber"
            :class="{
                'current-page': page === pageNumber
            }"
            @click="changePage(pageNumber)">
            {{ pageNumber }}
        </a>
    </section>

    <newsletters />
</template>

<script>
    import PostList from '../components/PostList.vue';
    import Newsletters from '../components/Newsletters.vue';
    import Loading from '../components/UI/Loading.vue';

    export default {
        name: 'Blog',
        components: {
            PostList,
            Newsletters,
            Loading
        },
        data() {
            return {
                urlApi: 'https://jsonplaceholder.typicode.com/posts',
                isPostsLoading: false,
                posts: [],
                page: 1,
                limit: 10,
                totalPages: 0,
            }
        },
        methods: {
            changePage(pageNumber) {
                this.page = pageNumber;
            },
            async fetchPosts() {
                try {
                    this.isPostsLoading = true;
                    const response = await axios.get(this.urlApi, {
                        params: {
                            _page: this.page,
                            _limit: this.limit,
                        }
                    });
                    this.totalPages = Math.ceil(response.headers['x-total-count'] / this.limit);
                    this.posts = response.data;
                } catch (e) {
                    alert('Ошибка в загрузке постов')
                } finally {
                    this.isPostsLoading = false;
                }
            },
        },
        mounted() {
            document.title = "Blog";
            this.fetchPosts();
        },
        watch: {
            page() {
                this.fetchPosts();
            }
        },
        computed: {
            bgImage() {
                return `background-image: url("images/blog/banner.jpg")`;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .blog-header {
        h2, p {
            color: var(--light);;
        }
    }

    #blog {
        padding: 150px 150px 0 150px;
    }

</style>
