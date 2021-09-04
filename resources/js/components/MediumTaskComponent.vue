<template>
    <div>
        <div class="task-menu-header fit-text">
            {{ title }}
        </div>
        <div class="task-menu-body">
            <table class="table task-table">
                <tr>
                    <td class="col-3">ID:</td>
                    <td class="col-9">{{ taskId }}</td>
                </tr>
                <tr>
                    <td class="col-3">Description:</td>
                    <td class="col-9">{{ description }}</td>
                </tr>
                <tr>
                    <td class="col-3">Site:</td>
                    <td class="col-9">{{ site }}</td>
                </tr>
                <tr>
                    <td class="col-3">URL:</td>
                    <td class="col-9"><a class="main-link" :href='url' target="_blank">{{ url }}</a></td>
                </tr>
                <tr>
                    <td class="col-3">Tags:</td>
                    <td class="col-9">
                        <a class="task-tag" href = "#" v-for="(tag,index) in tags" v-if="index<6" >
                            {{ tag.name }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="col-3">Author Name:</td>
                    <td class="col-9">{{ authorName }}</td>
                </tr>
                <tr>
                    <td class="col-3">Time:</td>
                    <td class="col-9">{{ time }}</td>
                </tr>
                <tr >
                    <td class="col-3"></td>
                    <td class="col-3">
                        <a class="btn btn-primary a-button" :href ="taskVeiw">View</a>
                        <a class="btn btn-primary a-button ml-3":href ="taskVeiw">Submit</a>
                        <a class="btn btn-primary a-button ml-3" href ="#">Report</a>
                        <div class="alert alert-success d-inline ml-4 float-right ml-0 mb-0" v-if="solved">
                            Solved
                        </div>
                        <div class="alert alert-danger d-inline ml-4 float-right ml-0 mb-0" v-if="!solved">
                            Not Solved Yet
                        </div>
                    </td>
                </tr>
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
