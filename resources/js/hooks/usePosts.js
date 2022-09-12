import axios from "axios";
import { onMounted, ref } from "vue";

export function usePosts(limit) {
    const urlApi = 'https://jsonplaceholder.typicode.com/posts';
    const posts = ref([]);
    const isPostsLoading = ref(true);
    const totalPages = ref(0);
    const page = 1;

    const fetching = async () => {
        try {
            const response = await axios.get(urlApi, {
                params: {
                    _page: page,
                    _limit: limit,
                }
            });
            totalPages.value = Math.ceil(response.headers['x-total-count'] / limit);
            posts.value = response.data;
        } catch (error) {
            alert('Ошибка');
        } finally {
            isPostsLoading.value = false;
        }
    };
    onMounted(fetching);
    return {
        posts, isPostsLoading, totalPages, page
    }
}
