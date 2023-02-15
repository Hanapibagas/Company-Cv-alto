@extends('layouts.app')

@section('title')
Gallery Video
@endsection

@section('content')
<div class="container content-space-t-3 content-space-t-lg-5">
    <div class="w-lg-75 text-center mx-lg-auto">
        <div class="mb-5 mb-md-10">
            <h1 class="display-4">Events</h1>
        </div>
    </div>
</div>

<div class="container content-space-b-2 content-space-b-lg-3">
    <div class="js-shuffle row row-cols-1 row-cols-sm-2 row-cols-md-3">
        @forelse ( $videos as $video )
        <div class="js-shuffle-item col mb-5" data-groups='["product"]'>
            <a class="card card-flush card-transition">
                <video controls>
                    <source src="{{ asset('storage/'.$video->video) }}" type="video/mp4">
                </video>
            </a>
        </div>
        @empty
        <div style="text-align: center; margin-left: 33%">
            <h1>
                Mohon maaf portofolio saat ini tidak ada.
            </h1>
        </div>
        @endforelse
    </div>
</div>

@include('includes.pages.footer-blue')
@endsection