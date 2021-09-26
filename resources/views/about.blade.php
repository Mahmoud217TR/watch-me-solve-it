@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Made By:') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="about-table">
                        <tr>
                            <td>
                                <center><img class="about-pic" src="{{ asset('img/MyPic.jpg') }}"></center>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <table class="about-table table">
                        <tr>
                            <td td class="col-5 text-md-right">
                                <label class="info-type">Name: </label>
                            </td>
                            <td td class="col-5">
                                <label class="info">Mahmoud Mahmoud</label>
                            </td>
                        </tr>
                        <tr>
                            <td td class="col-4 text-md-right">
                                <label class="info-type">Work: </label>
                            </td>
                            <td td class="col-5">
                                <label class="info">Software Engineering Student</label>
                            </td>
                        </tr>
                        <tr>
                            <td td class="col-4 text-md-right">
                                <label class="info-type">Place: </label>
                            </td>
                            <td td class="col-5">
                                <label class="info">Homs, Syria</label>
                            </td>
                        </tr>
                        <tr>
                            <td td class="col-5 text-md-right">
                                <label class="info-type">Contact email: </label>
                            </td>
                            <td td class="col-5">
                                <label class="info">mahmoud17tr@gmail.com</label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
