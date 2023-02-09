@extends('layouts.app')

@section('title')
About
@endsection

@section('content')
<div class="container content-space-t-3 content-space-t-lg-5">
    <div class="w-lg-75 text-center mx-lg-auto">
        <div class="mb-5 mb-md-10">
            <h1 class="display-4">About Us</h1>
            <p class="lead">CV. Alto Perkasa adalah perusahaan web yang membuat situs web. Berbagai ukuran bisnis mulai
                dari startup baru hingga perusahaan publik menggunakan tema kami untuk membangun dan mengelola bisnis
                mereka secara online.</p>
        </div>
    </div>

    <div class="row gx-3">
        <div class="col mb-3">
            <div class="bg-img-start"
                style="background-image: url('{{ asset('pages/frontend/img/about/1.jpg') }}'); height: 15rem;"></div>
        </div>
        <div class="col-3 d-none d-md-block mb-3">
            <div class="bg-img-start"
                style="background-image: url('{{ asset('pages/frontend/img/about/2.jpg') }}'); height: 15rem;"></div>
        </div>
        <div class="col mb-3">
            <div class="bg-img-start"
                style="background-image: url('{{ asset('pages/frontend/img/about/3.jpg') }}'); height: 15rem;"></div>
        </div>
        <div class="w-100"></div>
        <div class="col mb-3 mb-md-0">
            <div class="bg-img-start"
                style="background-image: url('{{ asset('pages/frontend/img/about/4.jpg') }}'); height: 15rem;"></div>
        </div>
        <div class="col-4 d-none d-md-block mb-3 mb-md-0">
            <div class="bg-img-start"
                style="background-image: url('{{ asset('pages/frontend/img/about/5.jpg') }}'); height: 15rem;"></div>
        </div>
        <div class="col">
            <div class="bg-img-start"
                style="background-image: url('{{ asset('pages/frontend/img/about/6.jpg') }}'); height: 15rem;"></div>
        </div>
    </div>
</div>

<div class="container content-space-2 content-space-lg-3">
    <div class="row justify-content-lg-center">
        <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
            <div class="text-center">
                <h2 class="display-4">7</h2>
                <p class="small">years in business</p>
            </div>
        </div>
        <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
            <div class="text-center">
                <h2 class="display-4">3,5k+</h2>
                <p class="small">copies sold</p>
            </div>
        </div>
        <div class="col-sm-4 col-lg-3">
            <div class="text-center">
                <h2 class="display-4">85%</h2>
                <p class="small">happy customers</p>
            </div>
        </div>
    </div>
</div>

<div class="border-top mx-auto" style="max-width: 25rem;"></div>

<div class="container content-space-2 content-space-lg-3">
    <div class="row justify-content-lg-between">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <h2>We are IT Professional Indonesia.</h2>
        </div>
        <div class="col-lg-6">
            <p style="text-indent: 20px">
                CV. Alto Perkasa adalah salah satu development IT professional di Indonesia yang telah
                berpengalaman selama beberapa tahun dalam membangun serta mengembangkan berbagai prodak dibidang
                Teknologi informasi (IT) seperti membangun website, aplikasi apps, sistem informasi, infrastruktur
                jaringan komputer, master plan IT, penyedia tenaga ahli IT dan berbagai layanan pengadaan jasa IT
                lainnya baik diinstansi pemerintahan maupun non pemerintah. Dengan skill tenaga ahli yang kami miliki
                membuat CV. Alto Perkasa dipercaya dalam membangun berbagai
                prodak IT dibeberapa daerah di Indonesia.
            </p>
            <p style="text-indent: 20px">
                Salah satu misi CV. Alto Perkasa adalah selalu mengedepankan nilai-nilai kontribusi terhadap mitra atau
                klienuntuk menciptakan manajamen yang lebih baik dan efektif melalui Teknologi Informasi. Keunggulan
                lain dari CV. Alto Perkasa adalah selalu melakukan riset terlebih dahulu atas prodak-prodak IT atau
                software yang akan dibangun serta selalu mengikuti kaidah pengembangan teknologi informasi yang benar
                dan professional. Dengan demikian segala prodak IT yang dibangun memiliki nilai kualitas yang baik untuk
                memenuhi berbagai kebutuhan instansi, bisnis, pendidikan maupun pribadi yang sustainable.
            </p>
        </div>
    </div>
</div>

<div class="border-top mx-auto" style="max-width: 25rem;"></div>

<div class="container content-space-2 content-space-lg-3">
    <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <span class="text-cap">Our team</span>
        <h2>Creative minds</h2>
    </div>
    <div class="row gx-3 mb-5">
        <div class="col-sm-6 col-lg-3 mb-3">
            <div class="card card-transition h-100">
                <div class="card-body">
                    <div class="avatar avatar-lg avatar-circle mb-4">
                        <img class="avatar-img" src="{{ asset('pages/frontend/img/team/1 (1).jpg') }}"
                            alt="Image Description">
                    </div>
                    <span class="card-subtitle">Founder / CEO</span>
                    <h4 class="card-title">Christina Kray</h4>
                    <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>
                <div class="card-footer pt-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-google"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 mb-3">
            <div class="card card-transition h-100">
                <div class="card-body">
                    <div class="avatar avatar-lg avatar-circle mb-4">
                        <img class="avatar-img" src="{{ asset('pages/frontend/img/team/2 (1).jpg') }}"
                            alt="Image Description">
                    </div>

                    <span class="card-subtitle">Project Manager</span>
                    <h4 class="card-title">Jeff Fisher</h4>
                    <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>

                <div class="card-footer pt-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-google"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 mb-3">
            <div class="card card-transition h-100">
                <div class="card-body">
                    <div class="avatar avatar-lg avatar-circle mb-4">
                        <img class="avatar-img" src="{{ asset('pages/frontend/img/team/3 (1).jpg') }}"
                            alt="Image Description">
                    </div>

                    <span class="card-subtitle">Product Designer</span>
                    <h4 class="card-title">Amy Forren</h4>
                    <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>

                <div class="card-footer pt-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-google"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3 mb-3">
            <div class="card card-transition h-100">
                <div class="card-body">
                    <div class="avatar avatar-lg avatar-circle mb-4">
                        <img class="avatar-img" src="{{ asset('pages/frontend/img/team/4 (1).jpg') }}"
                            alt="Image Description">
                    </div>

                    <span class="card-subtitle">Support Consultant</span>
                    <h4 class="card-title">Philip Williams</h4>
                    <p class="card-text">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                </div>

                <div class="card-footer pt-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-google"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-primary btn-xs btn-icon rounded" href="#">
                                <i class="bi-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.pages.footer-blue')
@endsection