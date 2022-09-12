<template>
    <div v-if="posts.length > 0">
        <transition-group name="post-list">
            <post-item
                v-for="post in posts"
                :post="post"
                :key="post.id"
            />
        </transition-group>
    </div>
    <h2 v-else>Список постов пуст</h2>
</template>

<script>
    import PostItem from '@/components/PostItem.vue';

    export default {
        components: {
            PostItem
        },
        props: {
            posts: {
                type: Array,
                required: true,
            }
        }
    }
</script>

<style lang="scss">

</style>
