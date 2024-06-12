@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <h1 class="text-center">Daftar Tingkat Stress</h1>
        <div class="d-flex justify-content-left mb-3">
            <a href="{{ route('tingkat_stress.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Tingkat Stress</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stress as $item)
                    <tr>
                        <td>{{ $item->kode_stress }}</td>
                        <td>{{ $item->nama_tingkat_stress }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <a href="{{ route('tingkat_stress.edit', $item->kode_stress) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('tingkat_stress.destroy', $item->kode_stress) }}" method="POST" class="d-inline">
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