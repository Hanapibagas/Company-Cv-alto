@extends('layouts.app')

@section('title')
Blog
@endsection

@section('content')
<div class="container content-space-t-3 content-space-t-lg-5">
    <div class="w-lg-75 text-center mx-lg-auto">
        <div class="mb-5 mb-md-10">
            <h1 class="display-4">Blog</h1>
        </div>
    </div>
</div>

<div class="container content-space-b-2 content-space-b-lg-3">
    <div class="js-shuffle row row-cols-1 row-cols-sm-2 row-cols-md-3">
        @forelse ( $blogs as $blog )
        <div class="js-shuffle-item col mb-5" data-groups='["product"]'>
            <a href="{{ route('blog_details_home', $blog->slug) }}" class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('storage/'.$blog->image) }}" alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">{{ $blog->date }}</span>
                    <h3 class="card-title">{{ $blog->title }}</h3>
                </div>
            </a>
        </div>
        @empty
        <div style="text-align: center; margin-left: 33%">
            <h1>
                Mohon maaf blog saat ini tidak ada.
            </h1>
        </div>
        @endforelse
    </div>
</div>

@include('includes.pages.footer-blue')
@endsection