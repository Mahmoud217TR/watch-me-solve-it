<template>
    <div class="card">
                <div class="card-header">T{{ task['id'] }}. {{ task['title'] }}</div>
                <div class="card-body">
                    <table class="table">
                        <tr class="form-group row ">
                            <td class="col-3 col-form-label pt-4 mb-0">
                                <label for="subnum">Submission ID:</label>
                            </td>
                            <td class="col-6 ">
                                <input class="form-control d-inline" type="number" name="subnum" id="subnum">
                            </td>
                            <td class="col-3">
                                <button class="btn btn-primary p-1 mt-1" @click='submit'>Submit Solution</button>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>
                            <td>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                Description:
                            </td>
                            <td class="col-6 ">
                                {{ task['description'] }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                Site:
                            </td>
                            <td class="col-6 ">
                                {{ task['site'] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                URL:
                            </td>
                            <td class="col-6 ">
                                <a class="main-link" href="#" target="_blank">{{ task['url'] }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                Status:
                            </td>
                            <td class="col-6 ">
                                <div class="btn btn-success p-1" v-if="task['solved']">Solved</div>
                                <div class="btn btn-danger p-1" v-if="!task['solved']">Not Solved</div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                Author Name:
                            </td>
                            <td class="col-6 ">
                                {{ author['name'] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                Time:
                            </td>
                            <td class="col-6 ">
                                {{ time }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                Tags:
                            </td>
                            <td class="col-6 ">
                                <a class="task-tag p-1" href = "#" v-for="(tag,index) in tags" v-if="index<6" >
                                    {{ tag.name }}
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
</template>

<script>
    export default {
        mounted() {
            this.init()
        },
        props:['pTask','pAuthor','pTasker','pTags'],
        data() {
            return {
                task: [],
                author: [],
                tasker: [],
                tags: [],
                time: '',
            }
        },
        methods: {
            init(){
                var task = JSON.parse(this.pTask)
                var author = JSON.parse(this.pAuthor)
                var tasker = JSON.parse(this.pTasker)
                var tags = JSON.parse(this.pTags)
                

                this.task = task
                this.author = author
                this.tasker = tasker 
                this.tags = tags

                var d = new Date(task['created_at'])
                this.time = d.toLocaleDateString('en-GB')+" "+d.toLocaleTimeString('en-US')
            },
            submit(){
                axios.get('https://codeforces.com/api/user.status?handle=Haidar_Kahs&from=1&count=1000').then(response =>{
                    console.log(response.data)
                })
            }
        },
    }
</script>
