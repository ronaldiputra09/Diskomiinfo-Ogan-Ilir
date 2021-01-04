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
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center hero-text">
                        <h1 data-aos="fade-up" data-aos-delay="">Agenda Kominfo Ogan Ilir</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@section('main')
<br>
<div class="container">
    <div class="row align-items-stretch">
        @foreach ($agenda as $a)
        <div class="col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="pricing h-100 text-center">
                <span>&nbsp;</span>
                <h3>{{ $a->nama_kegiatan }}</h3>
                <ul class="list-unstyled">
                    <li>{{ $a->tempat }}</li>
                    <li>{{ $a->pengirim }}</li>
                </ul>
                <div class="price-cta">
                    <strong class="price">{{ $a->waktu }}</strong>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection