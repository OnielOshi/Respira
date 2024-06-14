@extends('layouts.app')

@section('content')
    <div class="pagetitle container mb-3">
        <h1>{{ __('Riwayat') }}</h1>
    </div>
    <div class="container d-flex justify-content-between">
        <div class="col-md-2">
            <div class="card info-card sales-card rounded-4">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5">{{ __('Tidak Stress') }}</h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="ps-3">
                            <h6 class="fs-5 text-success fw-bold">{{ $latestDiagnosa->persentase_penyakit_1 }}%</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card info-card sales-card rounded-4">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5">{{ __('Stress Rendah') }}</h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="ps-3">
                            <h6 class="fs-5 text-info fw-bold">{{ $latestDiagnosa->persentase_penyakit_2 }}%</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card info-card sales-card rounded-4">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5">{{ __('Stress Sedang') }}</h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="ps-3">
                            <h6 class="fs-5 text-warning fw-bold">{{ $latestDiagnosa->persentase_penyakit_3 }}%</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card info-card sales-card rounded-4">
                <div class="card-body text-center">
                    <h5 class="card-title fs-5">{{ __('Stress Tinggi') }}</h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="ps-3">
                            <h6 class="fs-5 text-danger fw-bold">{{ $latestDiagnosa->persentase_penyakit_4 }}%</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div id="chart" class="mb-3"></div>

    <script>
        var options = {
            series: <?php echo json_encode($data); ?>,
            chart: {
                height: 350,
                width: 800,
                type: 'line',
            },
            plotOptions: {
                line: {
                    isSlopeChart: true,
                },
            },
            dataLabels: {
                enabled: false,
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
    </div>



    <div class="container mb-5">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-1"></i>
            A simple warning alert with icon—check it out!
        </div>
    </div>
@endsection
