@extends('layouts.admin.master')
@section('judul','Agenda')
@section('content')
<div class="row-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>@yield('judul')</h4>
            <a href="{{ route('agenda.create') }}" class="btn btn-primary">Tambah Agenda</a>
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
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Pengirim</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agenda as $a => $hasil)
                    <tr>
                        <th scope="row">{{ $a + $agenda->firstitem() }}</th>
                        <td>{{ $hasil->nama_kegiatan }}</td>
                        <td>{{ $hasil->waktu }}</td>
                        <td>{{ $hasil->pengirim }}</td>
                        <td>
                            <form action="{{ route('agenda.destroy', $hasil->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('agenda.edit', $hasil->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah yakin ingin menghapus!')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $agenda->links() }}
        </div>
    </div>
</div>
@endsection