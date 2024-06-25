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
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-kode="{{ $item->kode_stress }}">{{ __('Hapus') }}</button>
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
                {{ __('Apakah Anda yakin ingin menghapus data ini? Relasi terkait juga akan dihapus.') }}
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button yang membuka modal
            var kodeStress = button.data('kode'); // Ambil data kode dari button

            // Set action form untuk menghapus tingkat stress dengan kodeStress yang sesuai
            var action = "{{ route('tingkat_stress.destroy', '') }}/" + kodeStress;
            $('#deleteForm').attr('action', action);
        });
    });
</script>
@endsection