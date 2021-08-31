@extends('layouts.app')

@section('content')
<div class="container home-container">
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-header ">
                    <span>Tasks</span>
                    <span class="float-right task-counter">1 Task</span>
                </div>
                <div class="card-body">
                    <a class="task-link" href="#">
                        <div class="task-menu-header fit-text">Lorem ipsum dolor sit.</div>
                        <div class="task-menu-body">
                            <div class="task-menu-label row">
                                <label class="col mb-0">ID: </label> <span class="col">1</span>
                            </div>
                            <div class="task-menu-label row">
                                <label class="col mb-0">Site: </label> <span class="col">Codeforces</span>
                            </div>
                            <div class="task-menu-label row">
                                <label class="col mb-0">Difficulty: </label> <span class="col">1000</span>
                            </div>
                            <div class="task-menu-label row">
                                <label class="col mb-0">Author: </label> <span class="col">Author Name</span>
                            </div>
                            <div class="task-menu-label row">
                                <label class="col mb-0">Time: </label> <span class="col">31-Aug-2021 7:00AM</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="feed">
                <post-component post-id = 1
                ></post-component>
                <post-component auth-src="{{ asset('img/admin.png') }}" auth-name = "Author Name" post-time ="30-Aug-2021 6:00PM"
                                post-title = "This is a longer longer longer post title for testing only"
                                post-text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt illo repellat exercitationem doloremque sapiente porro aliquam repellendus placeat asperiores impedit commodi, quas voluptatum rem praesentium blanditiis saepe soluta aspernatur ratione a? Consequuntur cum eos facere obcaecati rerum iste vel! Minima."
                ></post-component>
            </div>
        </div>
    </div>
</div>
@endsection
