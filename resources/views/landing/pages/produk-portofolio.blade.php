@extends('layouts.app')

@section('title')
Produk Portofolio
@endsection

@section('content')
<div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2 content-space-b-lg-3">
    <div class="text-center">
        <p class="lead">Welcome.</p>
        <h1 class="display-4 mb-0">I
            <span class="text-highlight-warning">
                <span class="js-typedjs" data-hs-typed-options='{
                    "strings": [
                        "create a portfolio",
                        "publicize my band",
                        "sell my products",
                        "promote my business",
                        "display my photographs",
                        "promote my business",
                        "publish my videos"
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
        <div class="js-shuffle-item col mb-5" data-groups='["product"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628253516.jpg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">Product</span>
                    <h3 class="card-title">Sistem Penerimaan Peserta Didik Baru (PPDB) Online</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["branding"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628253575.jpg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">Product</span>
                    <h3 class="card-title">Mamika Tanggap Convid 19</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["branding"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628253715.jpg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">product</span>
                    <h3 class="card-title">Smart Absen Mobile V 1.1 LJ</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["product"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628253764.jpg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">Product</span>
                    <h3 class="card-title">Sisfo Kesehatan Ibu Dan Anak Dinas Kesehatan</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["illustration"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628253817.jpg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">Product</span>
                    <h3 class="card-title">Sisfo Akreditasi Dinas Kesehatan</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["branding"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628253872.jpg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">product</span>
                    <h3 class="card-title">SIM - TLHP</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["branding"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628254031.jpeg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">product</span>
                    <h3 class="card-title">Smart Office Prov SulSel V LJ</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["design"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628254106.jpeg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">product</span>
                    <h3 class="card-title">sistem E-Kinerja Kab Wakatobi</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["design"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628254166.jpg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">product</span>
                    <h3 class="card-title">Sistem Informasi Konvensi Pendeta</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["design"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628254214.jpeg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">product</span>
                    <h3 class="card-title">Sistem Arsip Dinas Perpustakaan Dan Kearsipan</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["design"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628254272.jpeg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">product</span>
                    <h3 class="card-title">Sistem E-Absensi Toraja Utara</h3>
                </div>
            </a>
        </div>

        <div class="js-shuffle-item col mb-5" data-groups='["design"]'>
            <a class="card card-flush card-transition">
                <img class="card-img-top" src="{{ asset('pages/frontend/img/portofolio/1628254321.jpeg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <span class="card-subtitle text-body">product</span>
                    <h3 class="card-title">Web Mimika</h3>
                </div>
            </a>
        </div>
    </div>
</div>

@include('includes.pages.footer-blue')
@endsection