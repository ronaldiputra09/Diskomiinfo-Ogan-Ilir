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
                        <h1 data-aos="fade-up" data-aos-delay="">Blog</h1>
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
    <div class="row mb-5">
        @foreach ($post as $p)
        <div class="col-md-4" data-aos="fade-right">
            <div class="post-entry">
                <a href="{{ $p->gambar }}" class="d-block mb-4">
                    <img src="{{ $p->gambar }}" alt="Image" class="img-fluid">
                </a>
                <div class="post-text">
                    <span class="post-meta">{{ $p->created_at }} &bullet; By <a href="#">{{ $p->user->name }}</a></span>
                    <h3><a href="{{ route('blog.show', $p->slug) }}">{{ $p->judul }}</a></h3>
                    <p>{!! (str_word_count($p->konten) > 100 ? substr($p->konten,
                        0,200)."..." :
                        $p->konten) !!}</p>
                    <p><a href="{{ route('blog.show', $p->slug) }}" class="readmore">Read more</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection