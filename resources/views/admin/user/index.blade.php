@extends('layouts.admin.master')
@section('judul','Users')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>@yield('judul')</h4>
        <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">Tambah User</a>
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
                    <th scope="col">Nama User</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $k => $hasil)
                <tr>
                    <th scope="row">{{ $k + $user->firstitem() }}</th>
                    <td>{{ $hasil->name }}</td>
                    <td>{{ $hasil->email }}</td>
                    <td>
                        <form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('user.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah yakin ingin menghapus!')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $user->links() }}
    </div>
</div>

@endsection