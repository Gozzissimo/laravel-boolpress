<template>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div 
        v-for="(post, index) in posts"
        :key="index"
        class="col">
            <div class="card mb-4 h-100">
                <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">{{ post.content }}</p>
                </div>
                <div class="card-footer">
                <small class="text-muted">Last updated {{ post.updated_at }}</small>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from 'axios'

export default {
    name: 'Main',
    data() {
        return {
            posts: []
        }
    },

    created() {
        Axios.get('http://127.0.0.1:8000/api/posts').then(
            (result) => {
                // console.log(result.data.results.posts[0]);
                this.posts = result.data.results.posts
            }
        );
    }
}
</script>

<style lang="scss" scoped>

</style>
