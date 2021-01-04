<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-lg-4">
                <h1 class="mb-0 site-logo"><img src="{{ asset('frontend/img/logooi.png') }}" style="width: 35px"><a
                        href="{{ route('home') }}" class="mb-0"> Diskominfo OI</a></h1>
            </div>

            <div class="col-12 col-md-8 d-none d-lg-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="{{ (request()->segment(1) == 'home') ? 'active' : '' }}"><a
                                href="{{ route('home') }}" class="nav-link">Home</a></li>
                        <li
                            class="has-children {{ (request()->segment(1) == 'sejarah') ? 'active' : '' }} {{ (request()->segment(1) == 'visimisi') ? 'active' : '' }} {{ (request()->segment(1) == 'sambutan') ? 'active' : '' }} {{ (request()->segment(1) == 'struktur') ? 'active' : '' }}">
                            <a href="{{ route('sejarah') }}" class="nav-link">Profil</a>
                            <ul class="dropdown ">
                                <li><a href="{{ route('sejarah') }}"
                                        class="nav-link {{ (request()->segment(1) == 'sejarah') ? 'active' : '' }}">Sejarah</a>
                                </li>
                                <li><a href="{{ route('visimisi') }}"
                                        class="nav-link {{ (request()->segment(1) == 'visimisi') ? 'active' : '' }}">Visi
                                        dan Misi</a></li>
                                <li><a href="{{ route('sambutan') }}"
                                        class="nav-link {{ (request()->segment(1) == 'sambutan') ? 'active' : '' }}">Sambutan
                                        Kepala Dinas</a></li>
                                <li><a href="{{ route('struktur') }}"
                                        class="nav-link {{ (request()->segment(1) == 'struktur') ? 'active' : '' }}">Struktur</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('agenda') }}"
                                class="nav-link {{ (request()->segment(1) == 'agenda') ? 'active' : '' }}">Agenda</a>
                        </li>
                        <li><a href="{{ route('galeri') }}"
                                class="nav-link {{ (request()->segment(1) == 'galeri') ? 'active' : '' }}">Galeri</a>
                        </li>
                        <li><a href="{{ route('download') }}"
                                class="nav-link {{ (request()->segment(1) == 'download') ? 'active' : '' }}">Download</a>
                        </li>
                        <li><a href="{{ route('blog') }}"
                                class="nav-link {{ (request()->segment(1) == 'blog') ? 'active' : '' }}">Blog</a></li>
                        <li><a href="{{ route('kontakfront.index') }}"
                                class="nav-link {{ (request()->segment(1) == 'kontakfront') ? 'active' : '' }}">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

                <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
                    data-target="#main-navbar">
                    <span></span>
                </a>
            </div>

        </div>
    </div>

</header>