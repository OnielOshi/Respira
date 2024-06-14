@extends('layouts.adm')

@section('admcontent')
<div class="container mt-1">
        <h3 class="text-center">{{ __('Daftar Tingkat Stress') }}</h3>
        <div class="d-flex justify-content-left mb-3">
            <a href="{{ route('tingkat_stress.create') }}" class="btn btn-primary">{{ __('Tambah Data') }}</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">{{ __('Kode') }}</th>
                        <th scope="col">{{ __('Tingkat Stress') }}</th>
                        <th scope="col">{{ __('Keterangan') }}</th>
                        <th scope="col">{{ __('Aksi') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stress as $item)
                    <tr>
                        <td>{{ $item->kode_stress }}</td>
                        <td>{{ $item->nama_tingkat_stress }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <a href="{{ route('tingkat_stress.edit', $item->kode_stress) }}" class="btn btn-warning btn-sm">{{ __('Edit') }}</a>
                            <form action="{{ route('tingkat_stress.destroy', $item->kode_stress) }}" method="POST" class="d-inline">
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
