@extends('layouts.adm')

@section('admcontent')
<div class="container mt-1">
        <h3 class="text-center">{{ __('Daftar Relasi') }}</h3>
        <div class="d-flex justify-content-left mb-3">
            <a href="{{ route('relasi.create') }}" class="btn btn-primary">{{ __('Tambah Data') }}</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">{{ __('Kode Tingkat Stress') }}</th>
                        <th scope="col">{{ __('Kode Gejala') }}</th>
                        <th scope="col">MB</th>
                        <th scope="col">MD</th>
                        <th scope="col">{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($relasis as $item)
                    <tr>
                        <td>{{ $item->kode_stress }}</td>
                        <td>{{ $item->kode_gejala }}</td>
                        <td>{{ $item->mb }}</td>
                        <td>{{ $item->md }}</td>
                        <td>
                            <a href="{{ route('relasi.show', $item->id) }}" class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                            <form action="{{ route('relasi.destroy', $item->id) }}" method="POST" class="d-inline">
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
