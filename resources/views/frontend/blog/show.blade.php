@extends('layouts.frontend.master')
@section('hero')
<section class="hero-section inner-page">
    <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                </g>
            </g>
        </svg>

    </div>

    <div class="container">
        @foreach ($post as $p)
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center hero-text">
                        <h1 data-aos="fade-up" data-aos-delay="">{{ $p->judul }}
                        </h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">{{ $p->created_at }} &bullet; By <a
                                href="#" class="text-white">{{ $p->user->name }}</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</section>
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-10 blog-content">
            @foreach ($post as $p)
            <div class="row mb-5">
                <div class="col-md-12">
                    <figure><img src="{{ asset($p->gambar) }}" alt="Free Website Template by Free-Template.co"
                            class="img-fluid">
                    </figure>
                </div>
            </div>

            <p>{!! $p->konten !!}</p>

            <div class="pt-5">
                <p>Kategori: <a href="#">{{ $p->kategori->nama }}</a></p>
            </div>
            @endforeach

        </div>
        <div class="col-md-2 sidebar">
            <div class="sidebar-box">
                <div class="categories">
                    <h3>Kategori</h3>
                    @foreach ($kategori as $k)
                    <li>{{ $k->nama }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection