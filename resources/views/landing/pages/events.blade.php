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
                @forelse ( $events as $event )
                <div class="card card-flush card-stretched" style="margin-top: 40px">
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="card-img" src="{{ asset('storage/'.$event->image) }}" alt="Image Description">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <div class="mb-2">
                                    <a class="card-link"
                                        href="{{ route('events_details_home', $event->slug) }}">Community</a>
                                </div>
                                <h3 class="card-title">
                                    <a class="text-dark" href="{{ route('events_details_home', $event->slug) }}">
                                        {{ $event->title }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div style="text-align: center; margin-left: 50%">
                    <h2>Mohon maaf Event saat ini tidak ada.</h2>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>

@include('includes.pages.footer-blue')

@endsection