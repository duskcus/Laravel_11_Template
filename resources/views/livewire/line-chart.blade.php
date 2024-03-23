{{-- Chart.js component --}}
<div class="h-screen">
    <canvas id="myChart"></canvas>
</div>

{{-- Script --}}
<script>
    const ctx = document.getElementById('myChart');
    var productNameData = @json($dataProductName);
    var productAmountData = @json($dataProductAmount);

    var chart = new Chart(ctx, {
        // Type
        type: 'line',
        data: {
            labels: productNameData,
            datasets: [{
                label: 'Amount of products',
                data: productAmountData,
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

    // Livewire.on('chartUpdated', (data) => {
    //     chart.data.labels = productNameData
    //     chart.data.datasets[0].data = productAmountData
    //     console.log(chart.data.labels)
    //     console.log(chart.data.datasets[0].data)
    //     chart.update();
    // });

    setInterval(function() {
        // @this.call('getDataProduct');
        chart.data.labels = productNameData
        chart.data.datasets[0].data = productAmountData
        console.log(chart.data.labels)
        console.log(chart.data.datasets[0].data)
        chart.update();
    }, 2000); // Refresh every 0.5 seconds
</script>
