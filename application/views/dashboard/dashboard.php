<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<div class="container-fluid mt-5 pt-4">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header justify-content-between d-flex bg-white py-2">
                    <div class="font-weight-light my-auto">
                        <div style="font-size:18px;" class="text-black-50">Graphic</div>
                        <div class="small text-dark">21 Oct 2020</div>
                    </div>
                    <div class="my-auto">
                        <select class="form-control form-control-sm border-0" id="exampleFormControlSelect1">
                          <option>Today</option>
                          <option>Week</option>
                          <option>Month</option>
                          <option>Year</option>
                        </select>
                    </div>
                </div>
                <div class="card-body px-1 p-lg-4">
                    <canvas id="myChart" width="400" height="180"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Wilayah 1', 'Wilayah 2', 'Wilayah 3', 'Wilayah 4', 'Wilayah 5'],
            datasets: [{
                label: 'Produksi',
                data: [80000, 150000, 180000, 300000, 250000],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>