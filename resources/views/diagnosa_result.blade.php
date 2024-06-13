@extends('layouts.app')

@section('content')
<div class="container mt-1">
    <h3 class="text-center">Hasil Diagnosa</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tingkat Stress</th>
                    <th scope="col">Certainty Factor (CF)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cfResults as $tingkatStressId => $cfCombine)
                <tr>
                    <td>{{ $tingkatStressId }}</td>
                    <td>{{ $cfCombine }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
