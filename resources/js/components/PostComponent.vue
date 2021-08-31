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
            <!-- Title -->
            <div class="post-header-title">
                {{ postTitle }}
            </div>

        </div>
        <!-- Header End -->

        <!-- Body Start -->
        <div class="post-content row justify-content-center">
            <p>
                {{ postText }}
            </p>
            <div class="attachments" v-if="attachments.length > 0">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" v-for="(a,index) in attachments" :key="a.id" :class ='{"active":index == 0}' :data-slide-to="index"></li>   
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
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
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
        props:['postId'],
        mounted() {
            console.log('Component mounted.')
            this.getPost()
        },
        data() {
            return {
                authSrc: "http://127.0.0.1:8000/img/admin.png",
                authName: "No Name Available",
                postTime: "No Date Available",
                postTags: [],
                postTitle: "No Title Available",
                postText: "No Text Available",
                attachments: [],
            }
        },
        methods: {
            getPost(){
                console.log("Fetching Post "+this.postId)
                this.authSrc = "http://127.0.0.1:8000/img/admin.png"
                this.authName = "Author Name"
                this.postTime ="30-Aug-2021 6:00PM"
                this.postTags = [{id:1,name:'sorting'},
                                 {id:2,name:'C++'},
                                 {id:3,name:'math'},
                                ]
                this.postTitle = "This is a long post title for testing only"
                this.postText = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt illo repellat exercitationem doloremque sapiente porro aliquam repellendus placeat asperiores impedit commodi, quas voluptatum rem praesentium blanditiis saepe soluta aspernatur ratione a? Consequuntur cum eos facere obcaecati rerum iste vel! Minima."
                this.attachments = [{id:1,title:"photo 1",type:'img',url:"http://127.0.0.1:8000/img/testImg.gif"},
                                    {id:2,title:"photo 2",type:'img',url:"http://127.0.0.1:8000/img/testImg.gif"},
                                    {id:3,title:"photo 3",type:'img',url:"http://127.0.0.1:8000/img/testImg.gif"},
                                    {id:4,title:"file 1",type:'file',url:"http://127.0.0.1:8000/file/1"},
                                    {id:5,title:"file 2",type:'file',url:"http://127.0.0.1:8000/file/2"},
                                    ]
            },
        },
    }
</script>
