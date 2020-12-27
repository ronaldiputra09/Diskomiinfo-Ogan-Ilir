@extends('layouts.admin.master')
@section('judul','Tambah Users')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>@yield('judul')</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama User</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    value="{{ old('password') }}">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</div>

@endsection