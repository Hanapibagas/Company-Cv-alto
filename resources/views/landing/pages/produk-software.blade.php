@extends('layouts.app')

@section('title')
Produk Software
@endsection

@section('content')
<div class="container content-space-2 content-space-lg-3">
    <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2 class="h1">Software</h2>
    </div>

    <div class="row gx-3 mb-5 mb-md-9">
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <a class="card card-transition h-100" href="#">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/product/1643079060.jpg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-primary">Product</span>
                    <h5 class="card-text lh-base">Microsoft Windows 10M PRO 64bit (PROMO)</h5>
                    <p>Rp. 2,390,000</p>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <a class="card card-transition h-100" href="#">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/product/1643094254.png') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-primary">product</span>
                    <h5 class="card-text lh-base">Windows 10 PRO ORI OEM</h5>
                    <p>Rp. 200,000</p>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
            <a class="card card-transition h-100" href="#">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/product/1643094794.jpg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-primary">product</span>
                    <h5 class="card-text lh-base">Windows 10 PRO</h5>
                    <p>Rp. 250,000</p>
                </div>
            </a>
        </div>
    </div>
</div>

@include('includes.pages.footer-blue')
@endsection