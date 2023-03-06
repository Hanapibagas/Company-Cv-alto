@extends('layouts.app')

@section('title')
Details Blog
@endsection

@push('link')
<meta property="og:image" itemprop="image" content="{{ asset('storage/'.$blogs->image) }}">
<meta property="og:image:width" content="1024">
<meta property="og:image:height" content="1024">
<meta property="og:title" content="{{ $blogs->title }}" />
@endpush

@push('add-style')
<script type='text/javascript'
    src='https://platform-api.sharethis.com/js/sharethis.js#property=61fdcb3c97a9c5001998eb2d&product=inline-share-buttons'
    async='async'></script>
@endpush

@section('content')
<div class="container content-space-t-3 content-space-t-lg-4 content-space-b-2">
    <div class="w-lg-65 mx-lg-auto">
        <div class="mb-4">
            <h1 class="h2" style="text-indent: 20px">
                {{ $blogs->title }}
            </h1>
        </div>
    </div>
    <div class="my-4 my-sm-8">
        <img class="img-fluid rounded-lg" style="width: 50%; margin-left: 24%"
            src="{{ asset('storage/'.$blogs->image) }}" alt="Image Description">
    </div>
    <div class="w-lg-65 mx-lg-auto">
        <p>
            {!! $blogs->deskripsi !!}
        </p>

        {{-- <div class="row justify-content-sm-between align-items-sm-center mt-5">
            <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex align-items-center">
                    <span class="text-cap mb-0 me-2">Share:</span>
                    <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                        <i class="bi-facebook"></i>
                    </a>
                    <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                        <i class="bi-twitter"></i>
                    </a>
                    <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#">
                        <i class="bi-instagram"></i>
                    </a>
                    <a class="btn btn-ghost-secondary btn-sm btn-icon rounded-circle me-2" href="#.">
                        <i class="bi-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-auto">
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#" data-toggle="tooltip"
                    data-placement="top" title="Bookmark story">
                    <i class="bi-bookmark"></i>
                </a>
                <a class="btn btn-soft-secondary btn-sm btn-icon rounded-circle" href="#" data-toggle="tooltip"
                    data-placement="top" title="Report story">
                    <i class="bi-flag"></i>
                </a>
            </div>
        </div> --}}
        <div class="sharethis-inline-share-buttons"></div>
    </div>
</div>


@include('includes.pages.footer-blue')
@endsection