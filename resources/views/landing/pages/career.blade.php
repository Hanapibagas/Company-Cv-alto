@extends('layouts.app')

@section('title')
Career
@endsection

@section('content')
<div class="container content-space-t-3 content-space-t-lg-5">
    <div class="w-lg-75 text-center mx-lg-auto">
        <div class="mb-5 mb-md-10">
            <h1 class="display-4">Career</h1>
        </div>
    </div>
</div>

<div class="container content-space-2 content-space-b-lg-3">
    <div class="row">
        @foreach ( $banner as $files )
        <div class="order-lg-0 col-sm-6 col-lg-4 mb-3 mb-sm-7">
            <a class="card card-stretched-vertical card-transition bg-img-start gradient-y-overlay-sm-gray-900"
                min-height: 25rem;">
                <img src="{{ asset('storage/'.$files->banner) }}" alt="" srcset="">
            </a>
        </div>
        @endforeach
    </div>

    <div class="text-center">
        <div class="card card-info-link card-sm">
            <div class="card-body">
                Bagi Pelamar yang berminat pada beberapa lowongan kerja kami silahkan isi form berikut
                <a class="card-link ms-2" href="#">
                    Form Isian
                    <span class="bi-chevron-right small ms-1"></span>
                </a>
            </div>
        </div>
    </div>
</div>

@include('includes.pages.footer-blue')

@endsection