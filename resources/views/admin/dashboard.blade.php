@extends('layouts.admin.master')
@section('judul','Dashboard')
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Admin</h4>
                </div>
                <div class="card-body">
                    {{ $user }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-th"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Postingan</h4>
                </div>
                <div class="card-body">
                    {{ $post }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Agenda</h4>
                </div>
                <div class="card-body">
                    {{ $agenda }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-th-large"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Galeri</h4>
                </div>
                <div class="card-body">
                    {{ $galeri }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection