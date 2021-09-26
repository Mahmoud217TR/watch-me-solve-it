@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card mb-4">
                <div class="card-header">{{ __('Add Task') }}</div>

                <div class="card-body">
                   <form method="POST" action="{{ route('task.store') }}">
                    @csrf
                       <!-- Title -->
                       <div class="form-group row">
                           <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
                           <div class="col-md-6">
                               <input id = 'title' type="text" class="form-control @error('title') is-invalid @enderror" name = 'title' required autofocus>
                               @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                       </div>

                       <!-- Site -->
                       <div class="form-group row">
                        <label for="site" class="col-md-4 col-form-label text-md-right">Site</label>
                        <div class="col-md-6">
                            <input id = 'site' type="text" class="form-control @error('site') is-invalid @enderror" name = 'site' required>
                            @error('site')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>
                    </div>

                    <!-- Difficulty -->
                    <div class="form-group row">
                        <label for="difficulty" class="col-md-4 col-form-label text-md-right">Difficulty</label>
                        <div class="col-md-6">
                            <input id = 'difficulty' type="number" class="form-control @error('difficulty') is-invalid @enderror" name = 'difficulty' required>
                            @error('difficulty')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>
                    </div>

                    <!-- URL -->
                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label text-md-right">URL</label>
                        <div class="col-md-6">
                            <input id = 'url' type="text" class="form-control @error('url') is-invalid @enderror" name = 'url' required>
                            @error('url')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                        <div class="col-md-6">
                            <textarea id = 'description' type="text" class="form-control @error('description') is-invalid @enderror" name = 'description' required ></textarea>
                            @error('description')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Task') }}
                            </button>
                        </div>
                    </div>
                   </form>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">{{ __('Add Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('post.store') }}" enctype='multipart/form-data'>
                    @csrf
                           <!-- Title -->
                           <div class="form-group row">
                               <label for="ptitle" class="col-md-4 col-form-label text-md-right">Title</label>
                               <div class="col-md-6">
                                   <input id = 'ptitle' type="text" class="form-control @error('ptitle') is-invalid @enderror" name = 'ptitle' required>
                                   @error('ptitle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               </div>
                           </div>

                           <!-- Description -->
                           <div class="form-group row">
                                <label for="ptext" class="col-md-4 col-form-label text-md-right">Text</label>
                                <div class="col-md-6">
                                    <textarea id = 'ptext' type="text" class="form-control @error('ptext') is-invalid @enderror" name = 'ptext' required ></textarea>
                                    @error('ptext')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Attachments</label>
                                <div class="col-md-6">
                                    <attachment-component></attachment-component>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Post') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
