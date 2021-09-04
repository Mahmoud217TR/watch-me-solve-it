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
                                <button class="btn btn-primary p-1 mt-1">Submit Solution</button>
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
                                <div class="btn btn-success p-1">Solved</div>
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
                                Mahmoud Mahmoud
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                Time:
                            </td>
                            <td class="col-6 ">
                                03/09/2021 11:01:09 PM
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                Tags:
                            </td>
                            <td class="col-6 ">
                                C++,Implementaion
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
        props:['pTask','pAuthor','pTasker'],
        data() {
            return {
                task: [],
                author: [],
                tasker: [],
            }
        },
        methods: {
            init(){
                var task = JSON.parse(this.pTask)
                console.log(task)
                var author = JSON.parse(this.pAuthor)
                console.log(author)
                var tasker = JSON.parse(this.pTasker)
                

                this.task = task
                this.author = author
                this.tasker = tasker 
            }
        },
    }
</script>
