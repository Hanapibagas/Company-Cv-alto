@extends('layouts.app')

@section('title')
Produk Hardware
@endsection

@section('content')
<div class="container content-space-2 content-space-lg-3">
    <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2 class="h1">Hardware</h2>
    </div>

    <div class="row gx-3 mb-5 mb-md-9">
        @forelse ( $hardwares as $hardware )
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
            <a class="card card-transition h-100" href="{{ route('hardware_details_home', $hardware->slug) }}">
                <img class="card-img-top" src="{{ asset('storage/'.$hardware->image) }}" alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-primary">Product</span>
                    <h5 class="card-text lh-base">{{ $hardware->title }}</h5>
                    <p>Rp. {{ $hardware->price }}</p>
                </div>
            </a>
        </div>
        @empty
        <div style="text-align: center">
            <h1>
                Mohon maaf Hardware saat ini tidak ada.
            </h1>
        </div>
        @endforelse
    </div>
</div>

@include('includes.pages.footer-blue')
@endsection