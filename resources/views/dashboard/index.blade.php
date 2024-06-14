@extends('layouts.adm')

@section('admcontent')
    <div class="container">
        <div class="pagetitle mb-3">
            <h1>Dashboard</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4">
                <div class="card info-card customers-card rounded-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4 mb-0">{{ __('User') }}</h5>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people fs-1 text-success"></i>
                            </div>
                            <div class="ps-4 mb-0">
                                <h6 class="mb-0 fs-3 fw-bold text-primary">{{ $userCount }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4">
                <div class="card info-card customers-card rounded-4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4 mb-0">{{ __('Diagnosa') }}</h5> 
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people fs-1 text-danger"></i> 
                            </div>
                            <div class="ps-4 mb-0">
                                <h6 class="mb-0 fs-3 fw-bold text-primary">{{ $diagnosaCount }}</h6> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Riwayat Diagnosa</h5>

                            <table id="example" class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col" class="text-center">Tidak Stress</th>
                                        <th scope="col" class="text-center">Stress Rendah</th>
                                        <th scope="col" class="text-center">Stress Sedang</th>
                                        <th scope="col" class="text-center">Stress Tinggi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diagnoses as $item)
                                        <tr>
                                            <th scope="row"><a href="#">{{ $item->id }}</a></th>
                                            <td>{{ $item->user->name }}</td>
                                            <td class="text-center">{{ $item->persentase_penyakit_1 }}%</td>
                                            <td class="text-center">{{ $item->persentase_penyakit_2 }}%</td>
                                            <td class="text-center">{{ $item->persentase_penyakit_3 }}%</td>
                                            <td class="text-center">{{ $item->persentase_penyakit_4 }}%</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- DataTables JavaScript -->
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    </div>
@endsection
