@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Daftar Gejala</h1>
    <div class="d-flex justify-content-left mb-3">
        <a href="{{ route('gejala.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kode Gejala</th>
                    <th scope="col">Gejala</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gejalas as $item)
                <tr>
                    <td>{{ $item->kode_gejala }}</td>
                    <td>{{ $item->nama_gejala }}</td>
                    <td>
                        <a href="{{ route('gejala.edit', $item->kode_gejala) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('gejala.destroy', $item->kode_gejala) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection