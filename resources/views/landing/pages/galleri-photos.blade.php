@extends('layouts.app')

@section('title')
Gallery Photos
@endsection

@section('content')
<div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2 content-space-b-lg-3">
    <div class="text-center">
        <p class="lead">Welcome.</p>
        <h1 class="display-4 mb-0">I
            <span class="text-highlight-warning">
                <span class="js-typedjs" data-hs-typed-options='{
                    "strings": [
                        "my products",
                        "my photographs",
                        "my videos"
                        ],
                    "typeSpeed": 100,
                    "loop": true,
                    "backSpeed": 50,
                    "backDelay": 1500
                }'></span>
            </span>
        </h1>
    </div>
</div>

<div class="container content-space-b-2 content-space-b-lg-3">
    <div class="js-shuffle row row-cols-1 row-cols-sm-2 row-cols-md-3">
        @forelse ( $photos as $photo )
        <div class="js-shuffle-item col mb-5" data-groups='["product"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('storage/'.$photo->image) }}" alt="Image Description">
                <div class="card-body">
                    <h3 class="card-title">{{ $photo->title }}</h3>
                </div>
            </a>
        </div>
        @empty
        <div style="text-align: center">
            <h1>
                Mohon maaf gallery photo saat ini tidak ada.
            </h1>
        </div>
        @endforelse
    </div>
</div>

@include('includes.pages.footer-blue')
@endsection