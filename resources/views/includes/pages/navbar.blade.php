<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
    data-hs-header-options='{
                "fixMoment": 1000,
                "fixEffect": "slide"
            }'>

    <div class="container">
        <nav class="js-mega-menu navbar-nav-wrap">
            <a class="navbar-brand" href="index.html" aria-label="Front">
                <img class="navbar-brand-logo" src="{{ asset('pages/frontend/img/logo/logo-cv-alto.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-default">
                    <i class="bi-list"></i>
                </span>
                <span class="navbar-toggler-toggled">
                    <i class="bi-x"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-absolute-top-scroller">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="hs-mega-menu-invoker nav-link" href="{{ route('index_home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="hs-mega-menu-invoker nav-link" href="{{ route('about_home') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="hs-mega-menu-invoker nav-link" href="{{ route('investor_home') }}">Investor</a>
                        </li>
                        <li class="nav-item">
                            <a class="hs-mega-menu-invoker nav-link" href="{{ route('career_home') }}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="hs-mega-menu-invoker nav-link" href="{{ route('events_home') }}">Events</a>
                        </li>
                        <li class="hs-has-sub-menu nav-item">
                            <a id="accountMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                                role="button" aria-expanded="false">Produk</a>
                            <div class="hs-sub-menu dropdown-menu" aria-labelledby="accountMegaMenu"
                                style="min-width: 14rem;">
                                <a class="dropdown-item " href="{{ route('potofolio_home') }}">Portfolio</a>
                                <a class="dropdown-item " href="{{ route('software_home') }}">sofware</a>
                                <a class="dropdown-item " href="{{ route('hardware_home') }}">Hardware</a>
                                <a class="dropdown-item " href="{{ route('networking_home') }}">Networking</a>
                            </div>
                        </li>
                        <li class="hs-has-sub-menu nav-item">
                            <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#"
                                role="button" aria-expanded="false">Gallery</a>
                            <div class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu"
                                style="min-width: 14rem;">
                                <a class="dropdown-item " href="{{ route('photos_home') }}">Photos</a>
                                {{-- <a class="dropdown-item " href="{{ route('video_home') }}">Video</a> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>