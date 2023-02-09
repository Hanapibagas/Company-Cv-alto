@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<div class="container content-space-t-4 content-space-b-1 content-space-b-sm-2">
    <div class="w-lg-75">
        <h1 class="display-3 mb-5">
            We are a
            <span class="text-primary text-highlight-warning">
                <span class="js-typedjs" data-hs-typed-options='{
            "strings": ["modern", "creative", "professional"],
            "typeSpeed": 70,
            "loop": true,
            "backSpeed": 40,
            "backDelay": 2000
            }'></span>
            </span>
            <br>
            full stack web agency
        </h1>
        <p class="lead">Selamat datang disitus Alto Perkasa. Kami adalah sebuah perusahaan swasta yang
            khusus
            bergerak dalam pengadaan produk dan jasa IT di Indonesia. Kami selalu siap melayani dan memberikan solusi
            terbaik untuk penerapan berbagai produk IT yang anda butuhkan. Jangan ragu menghubungi kami pada kontak yang
            tersedia apabila anda ingin mendapatkan solusi terbaik atas kebutuhan IT anda.</p>
    </div>
</div>

<div class="container">
    <img style="width: 80%" src="{{ asset('pages/frontend/video/working-in-office.jpg') }}" alt="" srcset="">
</div>

<div class="container content-space-b-2 content-space-b-lg-3">
    <div class="row">
        <div class="col-md-4 pt-7 pt-md-0">
            <div class="card bg-primary shadow-lg mt-md-n10" data-aos="fade-up">
                <div class="card-body">
                    <div class="mb-7">
                        <span class="card-subtitle text-warning">Mengapa harus di Alto Perkasa?</span>
                        <h2 class="card-title text-white">Banyak perusahaan, termasuk platform dan membuat plugin
                            bekerja sama dengan Alto Perkasa.</h2>
                    </div>
                    <div class="d-grid">
                        <a class="btn btn-soft-light btn-transition" href="#">View more</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 pt-7">
            <div class="row">
                <div class="col-4 py-3">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                        src="{{ asset('pages/frontend/svg/brands/dprd-gray.svg') }}" alt="Logo">
                </div>
                <div class="col-4 py-3">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                        src="{{ asset('pages/frontend/svg/brands/Bappeda Makassar.svg') }}" alt="Logo">
                </div>
                <div class="col-4 py-3">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                        src="{{ asset('pages/frontend/svg/brands/Dinas Pariwisata SulSel.svg') }}" alt="Logo">
                </div>
                <div class="col-4 py-3">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                        src="{{ asset('pages/frontend/svg/brands/Diskominfo Mimika.svg') }}" alt="Logo">
                </div>
                <div class="col-4 py-3">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                        src="{{ asset('pages/frontend/svg/brands/Diskominfo SulSel.svg') }}" alt="Logo">
                </div>
                <div class="col-4 py-3">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                        src="{{ asset('pages/frontend/svg/brands/Perpustakaan SulSel.svg') }}" alt="Logo">
                </div>
                <div class="col-4 py-3">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                        src="{{ asset('pages/frontend/svg/brands/PT. Liny Jaya Informatika.svg') }}" alt="Logo">
                </div>
                <div class="col-4 py-3">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                        src="{{ asset('pages/frontend/svg/brands/RS Kolaka Utara.svg') }}" alt="Logo">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="border-top mx-auto" style="max-width: 25rem;"></div>

<div class="container content-space-2 content-space-lg-3">
    <div class="w-md-65 mb-5 mb-md-9">
        <span class="text-cap">Portofolio</span>
        <h2 class="lh-base">Kami membantu bisnis mewujudkan ide di dunia digital, dengan merancang dan menerapkan alat
            teknologi yang mereka butuhkan untuk menang.</h2>
    </div>
    <div class="overflow-hidden">
        <div class="row justify-content-md-center gx-sm-3 gx-lg-8 pt-md-8 mb-7">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="d-grid gap-3 gap-lg-8 mt-md-n8">
                    <a class="card card-transition bg-soft-primary shadow-none"
                        href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">
                        <div class="card-body">
                            <div class="mb-5">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('pages/frontend/img/portofolio/undangan.jpeg') }}"
                                    alt="Image Description">
                            </div>
                            <span class="badge bg-primary rounded-pill mb-2">E-Undangan</span>
                            <h3 class="card-title text-inherit">Front - Multipurpose Responsive Template</h3>
                            <span class="d-block text-body mb-3">Landing &amp; Corporate</span>
                            <p class="card-text text-dark">Super clean, minimalistic, stylized mockup collection
                                with awesome customization features and huge resolution.</p>
                        </div>
                    </a>
                    <a class="card card-transition bg-soft-info shadow-none"
                        href="https://themes.getbootstrap.com/product/space-multipurpose-responsive-template/">
                        <div class="card-body">
                            <div class="mb-5">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('pages/frontend/img/portofolio/eproposal.jpeg') }}"
                                    alt="Image Description">
                            </div>
                            <span class="badge bg-primary rounded-pill mb-2">E-Undangan</span>
                            <h3 class="card-title text-inherit mb-1">Space – Multipurpose Responsive Template</h3>
                            <span class="d-block text-body mb-3">Landing &amp; Corporate</span>
                            <p class="card-text text-dark">Space – Multipurpose Responsive Template is a fully
                                responsive and yet modern premium Bootstrap theme.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="d-grid gap-3 gap-lg-8">
                    <a class="card card-transition bg-soft-dark shadow-none"
                        href="https://themes.getbootstrap.com/product/front-admin-dashboard-template/" target="_blank">
                        <div class="card-body">
                            <div class="mb-5">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('pages/frontend/img/portofolio/sim.jpg') }}" alt="Image Description">
                            </div>
                            <span class="badge bg-primary rounded-pill mb-2">SIM - TLHP</span>
                            <h3 class="card-title text-inherit mb-0">Front – Admin &amp; Dashboard Template</h3>
                            <span class="d-block text-body mb-3">Admin &amp; Dashboard</span>
                            <p class="card-text text-dark">Whether you’re creating a web application, dashboard,
                                admin panels, or SASS based interface — Front’s feature-rich components and
                                designed demo pages help you create the best possible web application projects.
                            </p>
                        </div>
                    </a>

                    <a class="card card-transition bg-soft-dark shadow-none"
                        href="https://themes.getbootstrap.com/product/nova-responsive-webapp-ui-kit/" target="_blank">
                        <div class="card-body">
                            <div class="mb-5">
                                <img class="img-fluid rounded-2"
                                    src="{{ asset('pages/frontend/img/portofolio/smart.jpeg') }}"
                                    alt="Image Description">
                            </div>
                            <span class="badge bg-primary rounded-pill mb-2">Smart</span>
                            <h3 class="card-title text-inherit mb-1">Nova – Responsive WebApp UI Kit</h3>
                            <span class="d-block text-body mb-3">Admin &amp; Dashboard</span>
                            <p class="card-text text-dark">Nova is a modern and fully responsive WebApp UI Kit –
                                it is the perfect starting point for any type of Web Applications.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a class="btn btn-outline-primary btn-transition" href="https://htmlstream.com/" target="_blank">View
            all works</a>
    </div>
</div>

<div class="border-top mx-auto" style="max-width: 25rem;"></div>

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

<div class="border-top mx-auto" style="max-width: 25rem;"></div>

<div class="container content-space-2 content-space-lg-3">
    <div class="w-md-65 mb-5 mb-md-9">
        <span class="text-cap">Alto Perkasa services</span>
        <h2 class="lh-base">Tingkatkan layanan Anda dengan Front yang menyediakan semua jenis layanan
            dan akan membantu audiens Anda tumbuh melalui semua platform.</h2>
    </div>
    <div class="row">
        <div class="col-md-5 mb-3 mb-md-0">
            <a class="card card-transition h-100" href="#" data-aos="fade-up">
                <img class="card-img-top" src="{{ asset('pages/frontend/svg/components/card-7.svg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <h3 class="card-title text-inherit">Have a meaningful impact</h3>
                    <p class="card-text text-body">We are aggressive about giving opportunities to Fronts who
                        have proven to be good at executing on them.</p>
                </div>
                <div class="card-footer pt-0">
                    <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                </div>
            </a>
        </div>
        <div class="col-md mb-3 mb-md-0">
            <a class="card card-transition h-100" href="#" data-aos="fade-up" data-aos-delay="150">
                <img class="card-img-top" src="{{ asset('pages/frontend/svg/components/card-8.svg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <h3 class="card-title text-inherit">Documentation</h3>
                    <p class="card-text text-body">Whether you're a startup or a global enterprise, learn how to
                        integrate with Front.</p>
                </div>
                <div class="card-footer pt-0">
                    <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                </div>
            </a>
        </div>
        <div class="col-md">
            <a class="card card-transition h-100" href="#" data-aos="fade-up" data-aos-delay="200">
                <img class="card-img-top" src="{{ asset('pages/frontend/svg/components/card-9.svg') }}"
                    alt="Image Description">
                <div class="card-body">
                    <h3 class="card-title text-inherit">Explore the Snippets tool</h3>
                    <p class="card-text text-body">Quickly Front sample components, copy-paste codes.</p>
                </div>
                <div class="card-footer pt-0">
                    <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
                </div>
            </a>
        </div>
    </div>
</div>

@include('includes.pages.footer')

@endsection