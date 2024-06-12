@extends('layouts.app')

@section('content')
    <div class="pagetitle container mb-3">
        <h1>Riwayat</h1>
    </div>
    <div class="container d-flex justify-content-between">
        <div class="col-md-2">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Tidak Stress </h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="ps-3">
                            <h6>145 %</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-start">
                        <div class="ps-3">
                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Sales <span>| Today</span></h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="ps-3">
                            <h6>145</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-start">
                        <div class="ps-3">
                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Sales <span>| Today</span></h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="ps-3">
                            <h6>145</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-start">
                        <div class="ps-3">
                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Sales <span>| Today</span></h5>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="ps-3">
                            <h6>145</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-start">
                        <div class="ps-3">
                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                class="text-muted small pt-2 ps-1">increase</span>
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
                series: [{
                        name: 'Blue',
                        data: [{
                                x: 'Jan',
                                y: 43
                            },
                            {
                                x: 'Feb',
                                y: 58
                            },
                            {
                                x: 'Mar',
                                y: 45
                            },
                            {
                                x: 'Apr',
                                y: 50
                            },
                            {
                                x: 'May',
                                y: 55
                            },
                            {
                                x: 'Jun',
                                y: 60
                            },
                            {
                                x: 'Jul',
                                y: 65
                            },
                            {
                                x: 'Aug',
                                y: 70
                            },
                            {
                                x: 'Sep',
                                y: 75
                            },
                            {
                                x: 'Oct',
                                y: 80
                            },
                            {
                                x: 'Nov',
                                y: 85
                            },
                            {
                                x: 'Dec',
                                y: 90
                            }
                        ]
                    },
                    {
                        name: 'Green',
                        data: [{
                                x: 'Jan',
                                y: 33
                            },
                            {
                                x: 'Feb',
                                y: 38
                            },
                            {
                                x: 'Mar',
                                y: 40
                            },
                            {
                                x: 'Apr',
                                y: 42
                            },
                            {
                                x: 'May',
                                y: 45
                            },
                            {
                                x: 'Jun',
                                y: 48
                            },
                            {
                                x: 'Jul',
                                y: 50
                            },
                            {
                                x: 'Aug',
                                y: 52
                            },
                            {
                                x: 'Sep',
                                y: 55
                            },
                            {
                                x: 'Oct',
                                y: 58
                            },
                            {
                                x: 'Nov',
                                y: 60
                            },
                            {
                                x: 'Dec',
                                y: 62
                            }
                        ]
                    },
                    {
                        name: 'Red',
                        data: [{
                                x: 'Jan',
                                y: 55
                            },
                            {
                                x: 'Feb',
                                y: 21
                            },
                            {
                                x: 'Mar',
                                y: 35
                            },
                            {
                                x: 'Apr',
                                y: 40
                            },
                            {
                                x: 'May',
                                y: 45
                            },
                            {
                                x: 'Jun',
                                y: 50
                            },
                            {
                                x: 'Jul',
                                y: 55
                            },
                            {
                                x: 'Aug',
                                y: 60
                            },
                            {
                                x: 'Sep',
                                y: 65
                            },
                            {
                                x: 'Oct',
                                y: 70
                            },
                            {
                                x: 'Nov',
                                y: 75
                            },
                            {
                                x: 'Dec',
                                y: 80
                            }
                        ]
                    },
                    {
                        name: 'Yellow',
                        data: [{
                                x: 'Jan',
                                y: 49
                            },
                            {
                                x: 'Feb',
                                y: 69
                            },
                            {
                                x: 'Mar',
                                y: 55
                            },
                            {
                                x: 'Apr',
                                y: 60
                            },
                            {
                                x: 'May',
                                y: 65
                            },
                            {
                                x: 'Jun',
                                y: 70
                            },
                            {
                                x: 'Jul',
                                y: 75
                            },
                            {
                                x: 'Aug',
                                y: 80
                            },
                            {
                                x: 'Sep',
                                y: 85
                            },
                            {
                                x: 'Oct',
                                y: 90
                            },
                            {
                                x: 'Nov',
                                y: 95
                            },
                            {
                                x: 'Dec',
                                y: 100
                            }
                        ]
                    }
                ],
                chart: {
                    height: 350,
                    width: 800,
                    type: 'line',
                },
                xaxis: {
                    type: 'category',
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                plotOptions: {
                    line: {
                        isSlopeChart: true,
                    },
                }
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
