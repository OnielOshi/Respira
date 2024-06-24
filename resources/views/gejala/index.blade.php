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
                        <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-kode="{{ $item->kode_gejala }}">{{ __('Hapus') }}</button> -->
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-kode="{{ $item->kode_gejala }}">
                            {{ __('Hapus') }}
                        </button>
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
                {{ __('Apakah Anda yakin ingin menghapus gejala ini? Relasi terkait juga akan dihapus.') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Batal') }}</button>
                <!-- Form untuk DELETE -->
                <form id="deleteForm" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __('Hapus') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button yang membuka modal
            var kodeGejala = button.data('kode'); // Ambil data kode dari button

            // Set action form untuk menghapus gejala dengan kodeGejala yang sesuai
            var action = "{{ route('gejala.destroy', '') }}/" + kodeGejala;
            $('#deleteForm').attr('action', action);
        });
    });
</script>


@endsection