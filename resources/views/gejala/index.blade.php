@extends('layouts.adm')

@section('admcontent')
<div class="container mt-1">
    <h3 class="text-center">{{ __('Daftar Gejala') }}</h3>
    <div class="d-flex justify-content-left mb-3">
        <a href="{{ route('gejala.create') }}" class="btn btn-primary">{{ __('Tambah Data') }}</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">{{ __('Kode Gejala') }}</th>
                    <th scope="col">{{ __('Gejala') }}</th>
                    <th scope="col">{{ __('Aksi') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gejalas as $item)
                <tr>
                    <td>{{ $item->kode_gejala }}</td>
                    <td>{{ $item->nama_gejala }}</td>
                    <td>
                        <a href="{{ route('gejala.edit', $item->kode_gejala) }}" class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                        <form action="{{ route('gejala.destroy', $item->kode_gejala) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">{{ __('Hapus') }}</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
