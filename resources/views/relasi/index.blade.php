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
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="{{ $item->id }}">{{ __('Hapus') }}</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Konfirmasi Penghapusan -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">{{ __('Konfirmasi Penghapusan') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ __('Apakah Anda yakin ingin menghapus relasi ini?') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Batal') }}</button>
                <form id="deleteForm" action="" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __('Hapus') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var action = "{{ route('relasi.destroy', '') }}/" + id;
        var modal = $(this);
        modal.find('#deleteForm').attr('action', action);
    });
</script>
@endsection
