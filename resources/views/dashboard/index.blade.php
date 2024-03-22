@extends('layouts.default')


{{-- @SECTION FOR THE START CONTENT --}}
@section('content')

    {{-- Chart.js component --}}
    <div class="h-screen">
        <canvas id="myChart"></canvas>
    </div>

    {{-- Script --}}
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            // Type
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                // https://stackoverflow.com/questions/19847582/chart-js-canvas-resize
                responsive: true, // Make the chart responsive
                maintainAspectRatio: true // Ensure the chart maintains aspect ratio while being responsive
            }
        });
    </script>



    {{-- @ENDSECTION FOR THE END OF CONTENT --}}
@endsection
