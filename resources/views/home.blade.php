@extends('layouts.app')

@section('content')
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
    <div class="col-8">

        <div class="feed">
            <div class="feed-post">

                <div class="post-header mb-3">
                    <div class="row align-items-center mb-1">
                        <div class="col-1">
                            <a href="#"><img class="author-image" src="{{ asset('img/admin.png') }}" alt="Author Image"></a>
                        </div>
                        <div class="col-6 pl-0">
                            <a class='author-name' href="#">Author name</a>
                            <p class="mb-1 ml-1 post-time">30-Aug-2021 6:00PM</p>
                        </div>
                    </div>

                    <div class="post-header-title">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, eaque.
                    </div>
                </div>

                <div class="post-content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt illo repellat exercitationem doloremque sapiente porro aliquam repellendus placeat asperiores impedit commodi, quas voluptatum rem praesentium blanditiis saepe soluta aspernatur ratione a? Consequuntur cum eos facere obcaecati rerum iste vel! Minima.
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
