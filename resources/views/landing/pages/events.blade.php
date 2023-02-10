@extends('layouts.app')

@section('title')
Events
@endsection

@section('content')
<div class="container content-space-t-3 content-space-t-lg-5">
    <div class="w-lg-75 text-center mx-lg-auto">
        <div class="mb-5 mb-md-10">
            <h1 class="display-4">Events</h1>
        </div>
    </div>
</div>

<div class="container content-space-2 content-space-lg-3">
    <div class="row justify-content-lg-between">
        <div class="col-lg-8 mb-10 mb-lg-0">
            <div class="d-grid gap-7 mb-7">
                <div class="card card-flush card-stretched-vertical">
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="card-img" src="{{ asset('pages/frontend/img/events/1628254834.jpeg') }}"
                                alt="Image Description">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <div class="mb-2">
                                    <a class="card-link" href="">Community</a>
                                </div>
                                <h3 class="card-title">
                                    <a class="text-dark" href="">
                                        Ingin sukses jadi programmer ?
                                    </a>
                                </h3>
                                <p class="card-text">
                                    <a class="text-dark" href="">
                                        Liny Jaya Berbagi Ilmu Dengan Mengadakan Pelatihan Kilat Pembuatan Web Khusus
                                        Untuk
                                        Tingkat Pemula Yang Ingin Sukses Jadi Web Developer
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.pages.footer-blue')

@endsection