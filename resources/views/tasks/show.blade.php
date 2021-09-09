@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <task-component p-task = '{{ $task }}' p-author = '{{ $task->getAuthor() }}' p-tasker = '{{ $task->getTasker() }}' p-tags = '{{ $task->tags }}'></task-component>
        </div>
    </div>
</div>
@endsection
