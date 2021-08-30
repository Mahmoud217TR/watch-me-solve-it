<template>
    <div class="feed-post">

        <!-- Header Start -->
        <div class="post-header mb-3">
            <div class="row align-items-center mb-1">
                <div class="col-1">
                    <a href="#"><img class="author-image" :src="authSrc" alt="Author Image"></a>
                </div>
                <div class="col-6 pl-0">
                    <a class='author-name' href="#">{{ authName }}</a>
                    <p class="mb-1 ml-1 post-time">{{ postTime }}</p>
                </div>
            </div>
            <!-- Tags -->
            <div class="post-header-tags">
                <a class="tag" href="#">
                    sorting 
                </a>
                <a class="tag" href="#">
                    c++ 
                </a>
            </div>
            <hr class="post-hr">
            <!-- Title -->
            <div class="post-header-title">
                {{ postTitle }}
            </div>

        </div>
        <!-- Header End -->

        <!-- Body Start -->
        <div class="post-content">
            {{ postText }}
        </div>
        <!-- Body End -->
    </div>
</template>

<script>
    export default {
        props:['authSrc','authName','postTime','postTitle','postText'],
        mounted() {
            console.log('Component mounted.')
        },
        
    }
</script>
