<template>
    <div class="card-group">
        <div class="card">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from 'axios'

export default {
    name: 'Main',

    created() {
        Axios.get('http://127.0.0.1:8000/api/posts').then(
            (result) => {
                console.log(result.data.results.posts[0]);
            }
        );
    }
}
</script>

<style lang="scss" scoped>

</style>
