<template>
    <div class="feed-post">

        <!-- Header Start -->
        <div class="post-header mb-3">
            <div class="row align-items-center mb-1">
                <div class="col-1">
                    <a :href="authProfile"><img class="author-image" :src="authSrc" alt="Author Image"></a>
                </div>
                <div class="col-6 pl-0">
                    <a class='author-name' :href="authProfile">{{ authName }}</a>
                    <p class="mb-1 ml-1 post-time">{{ postTime }}</p>
                </div>
                <div class="col">
                    <div class="post-header-tags float-right" v-if="postTags.length > 0">
                        <div class='d-inline ' v-for="(tag,index) in postTags" :key="tag.id" v-if="index<6" >
                            <a class="tag" href="#">{{tag.name}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tags -->
            
            <hr class="post-hr">

        </div>
        <!-- Header End -->

        <!-- Body Start -->
        <div class="post-content row justify-content-center">
            <!-- Title -->
            <div class="post-header-title mb-2">
                {{ postTitle }}
            </div>
            <p>
                {{ postText }}
            </p>
            <div class="attachments" v-if="attachments.length > 0">
                <div :id="carID" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li :data-target="carTarget" v-for="(a,index) in attachments" :key="a.id" :class ='{"active":index == 0}' :data-slide-to="index"></li>   
                    </ol>
                    <div class="carousel-inner post-attachment">
                        <div class="carousel-item" v-for="(a,index) in attachments" :key="a.id" :class ='{"active":index == 0}' >
                            <a :href="a.url" >
                                <img :src="a.type == 'img' ? a.url : 'http://127.0.0.1:8000/img/fileImg.png'" class="d-block w-100" >
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class='attachment-title'>{{ a.title }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" :href="carTarget" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" :href="carTarget" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Body End -->
    </div>
</template>

<script>
    export default {
        props:['post','author','postAttachments','postTags','picStart'],
        created() {
            this.getPost()
        },
        data() {
            return {
                authSrc: "http://127.0.0.1:8000/img/admin.png",
                authName: "No Name Available",
                authProfile: "#",
                postTime: "No Date Available",
                postTags: [],
                postTitle: "No Title Available",
                postText: "No Text Available",
                attachments: [],
                carID: "carousel",
                carTarget: "#carousel"
            }
        },
        methods: {
            getPost(){

                var author = JSON.parse(this.author)
                var post = JSON.parse(this.post)
                var attachments = JSON.parse(this.postAttachments)
                var tags = JSON.parse(this.postTags)

                // Author Stuff
                this.authSrc = this.picStart+author['picture']
                this.authName = author['name']
                this.authProfile = '/profile/'+author['id']

                // Post Stuff
                var d = new Date(post['created_at'])
                this.postTime = d.toLocaleDateString('en-GB')+" "+d.toLocaleTimeString('en-US')
                this.postTitle = post['title']
                this.postText = post['text']
                this.postTags = tags            
                this.attachments = attachments
                this.carID = 'carousel'+this.postId
                this.carTarget = '#'+this.carID
            },
        },
    }
</script>
