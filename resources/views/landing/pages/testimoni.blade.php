@extends('layouts.app')

@section('title')
Testimoni
@endsection

@section('content')
<div class="container content-space-t-3 content-space-t-lg-5">
    <div class="w-lg-75 text-center mx-lg-auto">
        <div class="mb-5 mb-md-10">
            <h1 class="display-4">Testimoni</h1>
        </div>
    </div>
</div>

<div class="container content-space-1 content-space-md-3">
    <div class="js-swiper-single-testimonials swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure class="w-md-65 text-center mx-md-auto">
                    <div class="mb-3">
                        <img class="avatar avatar-xl avatar-circle"
                            src="{{ asset('pages/frontend/img/testimoni/img10.jpg') }}" alt="Image Description">
                    </div>
                    <blockquote class="blockquote">“ It has many landing page variations to choose from, which
                        one is always a big advantage. ”</blockquote>
                    <figcaption class="blockquote-footer mb-5">
                        Lida Reidy
                        <span class="blockquote-footer-source">Project Manager</span>
                    </figcaption>
                    <img class="avatar avatar-xl avatar-4x3"
                        src="{{ asset('pages/frontend/svg/brands/Bappeda Makassar.svg') }}" alt="Logo">
                </figure>
            </div>
            <div class="swiper-slide">
                <figure class="w-md-65 text-center mx-md-auto">
                    <div class="mb-3">
                        <img class="avatar avatar-xl avatar-circle"
                            src="{{ asset('pages/frontend/img/testimoni/img4.jpg') }}" alt="Image Description">
                    </div>
                    <blockquote class="blockquote">“ I just wanted to say that I'm very happy with my purchase
                        of Front so far. The documentation is outstanding - clear and detailed. ”</blockquote>
                    <figcaption class="blockquote-footer mb-5">
                        Philip
                        <span class="blockquote-footer-source">Product Manager</span>
                    </figcaption>
                    <img class="avatar avatar-xl avatar-4x3"
                        src="{{ asset('pages/frontend/svg/brands/PT. Liny Jaya Informatika.svg') }}" alt="Logo">
                </figure>
            </div>
            <div class="swiper-slide">
                <figure class="w-md-65 text-center mx-md-auto">
                    <div class="mb-3">
                        <img class="avatar avatar-xl avatar-circle"
                            src="{{ asset('pages/frontend/img/testimoni/img9.jpg') }}" alt="Image Description">
                    </div>
                    <blockquote class="blockquote">“ This is a beautiful template with exciting components and
                        endless features. ”</blockquote>
                    <figcaption class="blockquote-footer mb-5">
                        Christina Kray
                        <span class="blockquote-footer-source">HR Director</span>
                    </figcaption>
                    <img class="avatar avatar-xl avatar-4x3"
                        src="{{ asset('pages/frontend/svg/brands/dprd-gray.svg') }}" alt="Logo">
                </figure>
            </div>
        </div>
        <div class="js-swiper-single-testimonials-pagination swiper-pagination"></div>
    </div>
</div>

@include('includes.pages.footer-blue')
@endsection