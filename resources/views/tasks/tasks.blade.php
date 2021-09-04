@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($tasks as $task)
                <medium-task-component task='{{ $task }}' author ='{{ $task->getAuthor() }}' task-tags = '{{ $task->tags }}' tasker = '{{ $task->getTasker() }}'></medium-task-component>
            @endforeach
        </div>
    </div>
</div>
@endsection
