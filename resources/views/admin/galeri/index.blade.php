@extends('layouts.admin.master')
@section('judul','Galeri')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
        <a href="{{ route('galeri.create') }}" class="btn btn-sm btn-primary">Tambah Galeri</a>
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
                    <th scope="col">Gambar</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galeri as $k => $hasil)
                <tr>
                    <th scope="row">{{ $k + $galeri->firstitem() }}</th>
                    <td>
                        <img src="{{ asset($hasil->gambar) }}" class="img-fluid" alt="Gambar Rusak"
                            style="width: 100px">
                    </td>
                    <td>{{ $hasil->keterangan }}</td>
                    <td>
                        <form action="{{ route('galeri.destroy', $hasil->id) }}" method="POST">
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
        {{ $galeri->links() }}
    </div>
</div>

@endsection