@extends('layouts.frontend.master')
@section('hero')
<section class="hero-section">
    <div class="wave">

        <svg width="100%" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                </g>
            </g>
        </svg>

    </div>
    <br><br><br><br>
    <div class="container">
        <div class="owl-carousel testimonial-carousel">
            @foreach ($banner as $b)
            <div class="review text-center">
                <img class="d-block w-100" style="border-radius: 20px" src="{{ $b->banner }}"
                    alt="{{ $b->keterangan }}">
            </div>
            @endforeach
        </div>
    </div>
    <br><br><br><br>
    <div class="container">
        <div class="col-12 hero-text-image">
            <div class="row">
                <div class="col-lg-8 text-center text-lg-left">
                    <h1 data-aos="fade-right">{{ $setting->judul_welcome }}</h1>
                    <p class="mb-5" data-aos="fade-right" data-aos-delay="100">{{ $setting->isi_welcome }}</p>
                    <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a
                            href="{{ route('sejarah') }}" class="btn btn-outline-white">Get started</a></p>
                </div>
                <div class="col-lg-4 iphone-wrap">
                    <img src="{{ asset('frontend/img/bupatioi.png') }}" alt="Image" class="phone-1"
                        data-aos="fade-right">
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@section('main')
<!-- ======= Home Section ======= -->
<section class="section">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
                <h2 class="section-heading">Profil Kominfo</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                <div class="feature-1 text-center">
                    <a href="{{ route('sejarah') }}">
                        <div class="wrap-icon icon-1">
                            <span class="icon la la-landmark"></span>
                        </div>
                    </a>
                    <h3 class="mb-3">Sejarah</h3>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-1 text-center">
                    <a href="{{ route('visimisi') }}">
                        <div class="wrap-icon icon-1">
                            <span class="icon la la-chart-bar"></span>
                        </div>
                    </a>
                    <h3 class="mb-3">Visi dan Misi</h3>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-1 text-center">
                    <a href="{{ route('sambutan') }}">
                        <div class="wrap-icon icon-1">
                            <span class="icon la la-microphone"></span>
                        </div>
                    </a>
                    <h3 class="mb-3">Sambutan Kepala Dinas</h3>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 mr-auto">
                <h2 class="mb-4">{{ $sambutan->judul }}</h2>
                <p class="mb-4">{!! Str::limit($sambutan->konten, 500, '...') !!}</p>
                <p><a href="{{ route('sambutan') }}" class="btn btn-primary">Lihat Konten</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('frontend/img/sambutan.svg') }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2">
                <h2 class="mb-4">Visi Misi</h2>
                <p class="mb-4">
                    <p class="mb-4">{!! Str::limit($visimisi->visi, 500, '...') !!}</p>
                </p>
                <p class="mb-4">
                    <p class="mb-4">{!! Str::limit($visimisi->misi, 500, '...') !!}</p>
                </p>
                <p><a href="{{ route('visimisi') }}" class="btn btn-primary">Lihat Konten</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('frontend/img/visimisi.svg') }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- ======= Testimonials Section ======= -->
<section class="section border-top border-bottom">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
                <h2 class="section-heading">Agenda</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($agenda as $a)
                    <div class="review text-center">
                        <h3>{{ $a->nama_kegiatan }}</h3>
                        <blockquote>
                            <p>{{ $a->tempat }}</p>
                        </blockquote>

                        <p class="review-user">
                            <span class="d-block">
                                <span class="text-black">{{ $a->waktu }}</span> &mdash; {{ $a->pengirim }}
                            </span>
                        </p>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section><!-- End Testimonials Section -->

<!-- ======= CTA Section ======= -->
<section class="section cta-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
                <h2>Terima Kasih Telah Mengunjungi Kami</h2>
            </div>
        </div>
    </div>
</section><!-- End CTA Section -->
@endsection