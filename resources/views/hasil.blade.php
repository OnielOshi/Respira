@extends('layouts.app')


@section('content')
    <div class="container d-flex flex-column justify-content-center rounded-4">
        <div class="pagetitle container-md-12 m-4 d-flex justify-content-center">
            <h1>Hasil diagnosa</h1>
        </div>
        <div class="container-md-12">
            <div id="barChart" class="mb-4"></div>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#barChart"), {
                        series: [{
                            data: [12, 24, 84, 34]
                        }],
                        chart: {
                            type: 'bar',
                            height: 350
                        },
                        plotOptions: {
                            bar: {
                                borderRadius: 4,
                                horizontal: true,
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        xaxis: {
                            categories: ['Tidak Stress', 'Stress Rendah', 'Stress Sedang', 'Stress Tinggi'],
                        }
                    }).render();
                });
            </script>
            <div class="container d-flex justify-content-center mb-4">
                <a href="" type="button" class="btn btn-primary me-3">Kembali ke Beranda</a>
                <a href="" type="button" class="btn btn-warning">Ke Riwayat</a>
            </div>
        </div>
    </div>
@endsection
