<template>
    <a class="task-link" :href="url">
        <div class="task-menu-header fit-text">{{ title }}</div>
            <div class="task-menu-body">
                <div class="task-menu-label row">
                    <label class="col mb-0">ID: </label> <span class="col">{{ taskId }}</span>
                </div>
                <div class="task-menu-label row">
                    <label class="col mb-0">Site: </label> <span class="col">{{ site }}</span>
                </div>
                <div class="task-menu-label row">
                    <label class="col mb-0">Difficulty: </label> <span class="col">{{ difficulty }}</span>
                </div>
                <div class="task-menu-label row">
                    <label class="col mb-0">Author: </label> <span class="col">{{ authorName }}</span>
                </div>
                <div class="task-menu-label row">
                    <label class="col mb-0">Time: </label> <span class="col">{{ time }}</span>
                </div>
            </div>
        </div>
    </a>
</template>

<script>
    export default {
        props:['author','task'],
        created() {
            this.getTask()
        },
        data() {
            return {
                taskId: '',
                title: "No Title Available",
                site: "No Stie Available",
                difficulty: 0,
                authorName: "No Username Available",
                time: "time",
                url: '#'
            }
        },
        methods: {
            getTask(){
                console.log("Fetching Task "+this.taskId)
                var task = JSON.parse(this.task)
                var author = JSON.parse(this.author)
               
                // Author Stuff
                this.authorName = author['name']

                // Post Stuff
                this.taskId = task['id']
                var d = new Date(task['created_at'])
                this.time = d.toLocaleDateString('en-GB')+" "+d.toLocaleTimeString('en-US')
                this.title = task['title']
                this.url = task['link']
                this.site = task['site']
                this.difficulty = task['difficulty']
                this.url = '/task/'+task['id']
            }
        },
    }
</script>
