<template>
    <section id="page-header" class="blog-header">
        <h2>Blog</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
    </section>

    <section id="blog">
        <post-list
            v-if="!isPostsLoading"
            :posts="posts"
        />

        <div v-else><h3>Идет загрузка...</h3></div>
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
    import { usePosts } from '@/hooks/usePosts.js';
    import Newsletters from '../components/Newsletters.vue';

    export default {
        name: 'Blog',
        components: {
            PostList,
            Newsletters,
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
        }
    }
</script>

<style lang="scss">
#page-header.blog-header {
    background-image: url("images/blog/blog.jpg");
}
#page-header h2,
#page-header p {
    color: var(--dark);;
}
#blog {
    padding: 150px 150px 0 150px;
}

</style>
