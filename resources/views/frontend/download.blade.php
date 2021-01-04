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
                        <h1 data-aos="fade-up" data-aos-delay="">Download File</h1>
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
        @foreach ($download as $d)
        <div class="col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="pricing h-100 text-center">
                <span>&nbsp;</span>
                <div class="feature-1 text-center">
                    <div class="wrap-icon icon-1">
                        <span class="icon la la-file"></span>
                    </div>
                </div>
                <h3>{{ $d->judul }}</h3>
                <ul class="list-unstyled">
                    <li><b>No Katalog :</b> {{ $d->no_katalog }}</li>
                    <li><b>No Publikasi :</b> {{ $d->no_publikasi }}</li>
                    <li><b>ISSN / ISBN :</b> {{ $d->issn }}</li>
                    <li><b>Tgl Publikasi :</b> {{ $d->tgl_publikasi }}</li>
                    <li>{{ Str::limit($d->keterangan, 100, '...') }}</li>
                </ul>
                <div class="price-cta">
                    <p><a href="{{ route('download.ambil', $d->id) }}" class="btn btn-primary">Download</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{ $download->links() }}
</div>
@endsection