@extends('layouts.admin.master')
@section('judul','Post')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
        <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary">Tambah Post</a>
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
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">User</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $k => $hasil)
                <tr>
                    <th scope="row">{{ $k + $post->firstitem() }}</th>
                    <td>{{ $hasil->judul }}</td>
                    <td>{{ $hasil->kategori->nama }}</td>
                    <td>
                        <img src="{{ asset($hasil->gambar) }}" alt="Gambar Rusak" class="img-fluid"
                            style="width: 100px">
                    </td>
                    <td>{{ $hasil->user->name }}</td>
                    <td>
                        <form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('post.show', $hasil->id) }}" class="btn btn-sm btn-warning">Show</a>
                            <a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah yakin ingin menghapus!')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $post->links() }}
    </div>
</div>

@endsection