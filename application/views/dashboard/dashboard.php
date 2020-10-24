<!-- Css (private use only) -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/datatables/dataTables.bootstrap4.min.css">

<!-- Js (private use only) -->
<script src="<?=base_url();?>assets/chartjs/chart.js"></script>
<script src="<?=base_url();?>assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/datatables/dataTables.bootstrap4.min.js"></script>

<div class="container-fluid mt-5 pt-4">
    <div class="row">
        <div class="col-12 col-lg-7">
            <div class="card shadow-sm mb-3">
                <div class="card-header justify-content-between d-flex bg-white py-2">
                    <div class="font-weight-light my-auto">
                        <div style="font-size:18px;" class="text-black-50">Graphic</div>
                        <div class="small text-dark">21 Oct 2020</div>
                    </div>
                    <div class="my-auto">
                        <select class="form-control border-0" id="exampleFormControlSelect1">
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
                <div class="card-footer bg-white">
                    <div class="row">
                        <div class="col">
                            <div class="small text-truncate text-black-50">Avg. Performance</div>
                            <div class="text-success" style="font-size: 1.4rem;"><i class="material-icons mr-2">check_circle</i>80%</div>
                        </div>
                        <div class="col">
                            <div class="small text-truncate text-black-50">Avg. Progress</div>
                            <div class="text-success" style="font-size: 1.4rem;"><i class="material-icons mr-2">check_circle</i>95%</div>
                        </div>
                        <div class="col mb-lg-0 mb-3">
                            <div class="small text-black-50">Issue</div>
                            <div class="text-danger" style="font-size: 1.4rem;"><i class="material-icons mr-2">warning</i>2</div>
                        </div>
                        <div class="col-10 col-lg-4">
                            <div class="small text-black-50">Production (Monthly)</div>
                            <div style="font-size: 1.4rem;"><span class="text-black-50">400000</span> / 1200000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 pl-lg-0">
            <div class="card shadow-sm mb-3">
                <div class="card-header justify-content-between d-flex bg-white py-2">
                    <div class="font-weight-light my-auto">
                        <div style="font-size:18px;" class="text-black-50">Table</div>
                        <div class="small text-dark">21 Oct 2020</div>
                    </div>
                    <div class="my-auto">
                        <select class="form-control border-0" id="exampleFormControlSelect1">
                          <option>Today</option>
                          <option>Week</option>
                          <option>Month</option>
                          <option>Year</option>
                        </select>
                    </div>
                </div>
                <div class="card-body px-1 p-lg-3">
                    <table id="example" class="display table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Location</th>
                                <th>Production</th>
                            </tr>
                        </thead>
                 
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Wilayah 1</td>
                                <td>80000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Wilayah 2</td>
                                <td>150000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Wilayah 3</td>
                                <td>180000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Wilayah 4</td>
                                <td>300000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Wilayah 5</td>
                                <td>250000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Chartjs
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Wilayah 1', 'Wilayah 2', 'Wilayah 3', 'Wilayah 4', 'Wilayah 5'],
            datasets: [{
                label: 'Production',
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

    // Datatables
    $(document).ready(function() {
        var table = $('#example').DataTable({ 
            searching: false, 
            paging: false, 
            info: false,
            select: false,
            "columnDefs": [{
                className: "Name", 
                "targets":[0],
                "visible": false,
                "searchable":false,
                "searching": false
            }]
        });//End of create main table
    });

</script>