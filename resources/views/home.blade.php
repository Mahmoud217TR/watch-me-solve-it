@extends('layouts.app')

@section('content')
<div class="container home-container">
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="card">
                <div class="card-header">Notifications</div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam quod impedit illum soluta corrupti cupiditate id praesentium a quia, voluptatem ea excepturi hic voluptas omnis deserunt quam asperiores harum culpa facilis quae consequatur minima, recusandae sed. Sunt nihil blanditiis omnis, quam similique expedita aperiam suscipit, sit quae facere, minus nesciunt qui earum? Aperiam sapiente reiciendis soluta veniam ipsum suscipit at laboriosam ad quidem. Quia odit dignissimos architecto optio delectus quae accusantium explicabo asperiores vero. Exercitationem totam molestias molestiae ipsum, ducimus blanditiis dolorem quibusdam iste dicta aliquid quam nesciunt. Vel veniam ex possimus id, aperiam cumque rerum praesentium non consectetur consequatur.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="feed">
                <post-component auth-src="{{ asset('img/admin.png') }}" auth-name = "Author Name" post-time ="30-Aug-2021 6:00PM"
                                post-title = "This is a long post title for testing only"
                                post-text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt illo repellat exercitationem doloremque sapiente porro aliquam repellendus placeat asperiores impedit commodi, quas voluptatum rem praesentium blanditiis saepe soluta aspernatur ratione a? Consequuntur cum eos facere obcaecati rerum iste vel! Minima."
                ></post-component>
                <post-component auth-src="{{ asset('img/admin.png') }}" auth-name = "Author Name" post-time ="30-Aug-2021 6:00PM"
                                post-title = "This is a long post title for testing only"
                                post-text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt illo repellat exercitationem doloremque sapiente porro aliquam repellendus placeat asperiores impedit commodi, quas voluptatum rem praesentium blanditiis saepe soluta aspernatur ratione a? Consequuntur cum eos facere obcaecati rerum iste vel! Minima."
                ></post-component>
            </div>
        </div>
    </div>
</div>
@endsection
