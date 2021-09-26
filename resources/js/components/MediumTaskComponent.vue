<template>
    <div>
        <div class="task-menu-header fit-text">
            {{ title }}
        </div>
        <div class="task-menu-body">
            <table class="container">
                <div class ='row'>
                    <div class="col-md-3 text-center text-md-start py-2">ID:</div>
                    <div class="col-md-9 text-center text-md-start py-2">{{ taskId }}</div>
                </div>
                <div class ='row'>
                    <div class="col-md-3 text-center text-md-start py-2">Description:</div>
                    <div class="col-md-9 text-center text-md-start py-2">{{ description }}</div>
                </div>
                <div class ='row'>
                    <div class="col-md-3 text-center text-md-start py-2">Site:</div>
                    <div class="col-md-9 text-center text-md-start py-2">{{ site }}</div>
                </div>
                <div class ='row'>
                    <div class="col-md-3 text-center text-md-start py-2">URL:</div>
                    <div class="col-md-9 text-center text-md-start py-2"><a class="main-link" :href='url' target="_blank">{{ url }}</a></div>
                </div>
                <div class ='row'>
                    <div class="col-md-3 text-center text-md-start py-2">Tags:</div>
                    <div class="col-md-9 text-center text-md-start py-2">
                        <a class="task-tag" href = "#" v-for="(tag,index) in tags" v-if="index<6" >
                            {{ tag.name }}
                        </a>
                    </div>
                </div>
                <div class ='row'>
                    <div class="col-md-3 text-center text-md-start py-2">Author Name:</div>
                    <div class="col-md-9 text-center text-md-start py-2">{{ authorName }}</div>
                </div>
                <div class ='row'>
                    <div class="col-md-3 text-center text-md-start py-2">Time:</div>
                    <div class="col-md-9 text-center text-md-start py-2">{{ time }}</div>
                </div>
                <div class ='row' >
                    <div class="col-lg-2 offset-lg-3 text-center py-2">
                        <a class="btn btn-primary a-button" :href ="taskVeiw">View</a>
                    </div>
                    <div class="col-lg-2 text-center py-2">
                        <a class="btn btn-primary a-button ml-3":href ="taskVeiw">Submit</a>
                    </div>
                    <div class="col-lg-2 text-center py-2">
                        <a class="btn btn-primary a-button ml-3" href ="#">Report</a>
                    </div>
                    <div class="col-lg-3 text-center py-2">
                        <div class="alert alert-success" v-if="solved">
                            Solved
                        </div>
                        <div class="alert alert-danger" v-if="!solved">
                            Not Solved Yet
                        </div>
                    </div>
                </div>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
            this.init()
        },
        props:['task','author','taskTags','tasker'],
        data() {
            return {
                solved: false,
                taskId: '',
                title: "No Title Available",
                site: "No Stie Available",
                description: "No Description Available",
                difficulty: 0,
                authorName: "No Username Available",
                time: "time",
                url: '#',
                tags: [],
                taskVeiw: '#'
            }
        },
        methods: {
            init(){
                var task = JSON.parse(this.task)
                var author = JSON.parse(this.author)
                var tags = JSON.parse(this.taskTags)
                var tasker = JSON.parse(this.tasker)

                var d = new Date(task['created_at'])
                this.time = d.toLocaleDateString('en-GB')+" "+d.toLocaleTimeString('en-US')

                this.taskId = task['id']
                this.title = task['title']
                this.site = task['site']
                this.url = task['url']
                this.authorName = author['name']
                this.tags = tags
                this.solved = tasker['solved']
                this.taskVeiw = '/task/'+task['id']
            }
        },
    }
</script>
