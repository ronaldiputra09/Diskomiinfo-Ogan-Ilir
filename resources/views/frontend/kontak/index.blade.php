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
                        <h1 data-aos="fade-up" data-aos-delay="">Kontak Kami</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@section('main')
<div class="container">
    <br>
    <div class="row mb-5 align-items-end">
        <div class="col-md-6" data-aos="fade-up">

            <h2>Contact Form</h2>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled">
                <li class="mb-3">
                    <strong class="d-block mb-1">Alamat</strong>
                    <span>Jl. Lintas Sumatera, Indralaya Raya, Kec. Indralaya, Kabupaten Ogan Ilir, Sumatera Selatan
                        30862</span>
                </li>
                <li class="mb-3">
                    <strong class="d-block mb-1">Telepon</strong>
                    <span>(0711) 7583058</span>
                </li>
            </ul>
        </div>

        <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="{{ route('kontakfront.store') }}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="nama">Nama lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" data-rule="minlen:4"
                            data-msg="Silahkan masukan nama lengkap." />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" name="email" id="email" data-rule="email"
                            data-msg="Silahkan masukan email." />
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="name">Pesan</label>
                        <textarea class="form-control" name="pesan" cols="30" rows="10" data-rule="required"
                            data-msg="Silahkan masukan pesan."></textarea>
                        <div class="validate"></div>
                    </div>

                    <div class="col-md-6 form-group">
                        <input type="submit" class="btn btn-primary d-block w-100" value="Send Message">
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="loading alert alert-success">Berhasil, mengirimkan pesan</div>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>
@endsection