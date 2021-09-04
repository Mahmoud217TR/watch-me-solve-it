@extends('layouts.app')

@section('content')
<div class="container home-container">
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-header ">
                    <span>Tasks</span>
                    <span class="float-right task-counter">{{ $tasks->count() }} @if($tasks->count() == 1) Task @else Tasks @endif</span>
                </div>
                <div class="card-body">
                   @foreach ($tasks as $task)
                    <short-task-component task ='{{ $task }}' author ='{{ $task->getAuthor() }}'></short-task-component>
                   @endforeach
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="feed">
                @foreach ($posts as $post)
                    <post-component post = '{{ $post }}' author ='{{ $post->getAuthor() }}' post-attachments ='{{ $post->getAttachments() }}' post-tags = '{{ $post->tags }}'></post-component>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
