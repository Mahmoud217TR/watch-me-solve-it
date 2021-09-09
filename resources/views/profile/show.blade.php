@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="profile-main-view col-md-4">
            <div class="profilepic">
                @if ($user->picture)
                    <img src="/storage/{{ $user->picture }}" >
                @else
                    <img src="{{ asset('img/admin.png') }}" >
                @endif
            </div>
            <div class="profile-info mt-4">
                <label class="info-type pr-4">Name:</label> <label class="info">{{ $user->name }}</label>
                <label class="info-type pr-4">Email:</label> <label class="info">{{ $user->email }}</label>
                <label class="info-type pr-4">Tasks Completed:</label> <label class="info">{{ App\Models\Task::getSolved()->count() }}</label>
            </div>
        </div>
        <div class="profile-secondary-view col-md-7 offset-1">
            @if (App\Models\Task::getSolved()->count() > 0)
                @foreach (App\Models\Task::getSolved() as $solved)
                    <label>{{ $solved->title }}</label>
                @endforeach
            @else
                <h3 class="ml-4">No Solved Tasks Yet!!</h3>
            @endif
        </div>
    </div>
</div>
@endsection
