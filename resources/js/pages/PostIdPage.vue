<template>
    <div>
        <h1>id = {{ $route.params.id }}</h1>
        {{ post }}
    </div>
</template>

<script>
    import PostItem from '../components/PostItem.vue';

    export default {
        name: 'Post',
        component: {
            PostItem
        },
        mounted() {
            document.title = 'Пост';
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

</style>
