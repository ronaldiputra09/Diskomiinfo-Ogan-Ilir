@extends('layouts.admin.master')
@section('judul','Kontak')
@section('content')
<div class="row-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>@yield('judul')</h4>
            <a href="{{ route('kontak.create') }}" class="btn btn-primary">Tambah Kontak</a>
        </div>
        <div class="card-body">
            @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontak as $k => $hasil)
                    <tr>
                        <th scope="row">{{ $k + $kontak->firstitem() }}</th>
                        <td>{{ $hasil->nama }}</td>
                        <td>{{ $hasil->email }}</td>
                        <td>{!! (str_word_count($hasil->pesan) > 10 ? substr($hasil->pesan, 0,200)."..." :
                            $hasil->pesan) !!}</td>
                        <td>
                            <form action="{{ route('kontak.destroy', $hasil->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah yakin ingin menghapus!')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $kontak->links() }}
        </div>
    </div>
</div>
@endsection