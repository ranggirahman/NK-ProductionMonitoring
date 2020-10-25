<!-- Css (private use only) -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/datatables/dataTables.bootstrap4.min.css">
<style type="text/css">
    table.dataTable thead th {
        border-top: none;
    }
</style>

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
                        <div style="font-size:18px;" class="text-black-50">Progress</div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="justify-content-between d-flex p-3 px-lg-5" style="overflow-y: auto;">
                        <div class="pr-4">
                            <div style="position: relative;" class="">
                                <canvas id="cProgress1" width="100" height="100"></canvas>
                                <div class="font-weight-light h5" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">83<span class="text-muted" style="opacity: 0.8; font-size: 0.7rem">%</span></div>
                            </div>
                            <div class="small text-center text-muted mt-2">Region 1</div>
                        </div>
                        <div class="pr-4">
                            <div style="position: relative;" class="">
                                <canvas id="cProgress2" width="100" height="100"></canvas>
                                <div class="font-weight-light h5" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">77<span class="text-muted" style="opacity: 0.8; font-size: 0.7rem">%</span></div>
                            </div>
                            <div class="small text-center text-muted mt-2">Region 2</div>
                        </div>
                        <div class="pr-4">
                            <div style="position: relative;" class="">
                                <canvas id="cProgress3" width="100" height="100"></canvas>
                                <div class="font-weight-light h5" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">100<span class="text-muted" style="opacity: 0.8; font-size: 0.7rem">%</span></div>
                            </div>
                            <div class="small text-center text-muted mt-2">Region 3</div>
                        </div>
                        <div class="pr-4">
                            <div style="position: relative;" class="">
                                <canvas id="cProgress4" width="100" height="100"></canvas>
                                <div class="font-weight-light h5" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">93<span class="text-muted" style="opacity: 0.8; font-size: 0.7rem">%</span></div>
                            </div>
                            <div class="small text-center text-muted mt-2">Region 4</div>
                        </div>
                        <div>
                            <div style="position: relative;" class="">
                                <canvas id="cProgress5" width="100" height="100"></canvas>
                                <div class="font-weight-light h5" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">88<span class="text-muted" style="opacity: 0.8; font-size: 0.7rem">%</span></div>
                            </div>
                            <div class="small text-center text-muted mt-2">Region 5</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-sm mb-3">
                <div class="card-header justify-content-between d-flex bg-white py-2">
                    <div class="font-weight-light my-auto">
                        <div style="font-size:18px;" class="text-black-50">Production Summary</div>
                        <div class="small text-dark">25 Oct 2020</div>
                    </div>
                    <div class="my-auto">
                        <select class="form-control border-0" id="">
                          <option>Today</option>
                          <option>Week</option>
                          <option>Month</option>
                          <option>Year</option>
                        </select>
                    </div>
                </div>
                <div class="card-body px-2 p-lg-3">
                    <canvas id="cProductionS" width="400" height="191"></canvas>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-5 pl-lg-0">
            <div class="card shadow-sm mb-3">
                <div class="card-header justify-content-between d-flex bg-white py-2">
                    <div class="font-weight-light my-auto">
                        <div style="font-size:18px;" class="text-black-50">Performance</div>
                        <div class="small text-dark">19 - 25 Oct 2020</div>
                    </div>
                    <div class="my-auto">
                        <select class="form-control border-0" id="">
                          <option>Week</option>
                          <option>Month</option>
                          <option>Year</option>
                        </select>
                    </div>
                </div>
                <div class="card-body pt-3 pb-2 p-lg-3 py-lg-0">
                    <canvas id="cPerformance" width="" height="145"></canvas>
                </div>
            </div>
            <div class="card shadow-sm mb-3">
                <div class="card-header justify-content-between d-flex bg-white py-2">
                    <div class="font-weight-light my-auto">
                        <div style="font-size:18px;" class="text-black-50">Production Log</div>
                    </div>
                    <div class="my-auto">
                        <div class="small text-dark"><i class="material-icons text-muted mr-2" style="font-size: 16px;">sync</i>22 Oct 2020</div>
                    </div>
                </div>
                <div class="card-body px-1 py-0 px-lg-3">
                    <table id="example" class="display table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Location</th>
                                <th>Production</th>
                                <th class="d-none d-sm-block">Last Update</th>
                                <th><i class="material-icons" style="font-size: 20px;">build</i></th>
                            </tr>
                        </thead>
                 
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Region 1</td>
                                <td><span class="text-muted">100000</span>/120000</td>
                                <td class="d-none d-sm-block">20 Oct 2020</td>
                                <td><i class="material-icons text-muted cur-default" title="Out-date">watch_later</i></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Region 2</td>
                                <td><span class="text-muted">150000</span>/195000</td>
                                <td class="d-none d-sm-block">21 Oct 2020</td>
                                <td><i class="material-icons text-success cur-default" title="Good">check_circle</i></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Region 3</td>
                                <td>200000/200000</td>
                                <td class="d-none d-sm-block">22 Oct 2020</td>
                                <td><i class="material-icons text-success cur-default" title="Good">check_circle</i></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Region 4</td>
                                <td><span class="text-muted">300000</span>/320000</td>
                                <td class="d-none d-sm-block">21 Oct 2020</td>
                                <td><i class="material-icons text-danger cur-default" title="1 Issue">warning</i></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Region 5</td>
                                <td><span class="text-muted">300000</span>/340000</td>
                                <td class="d-none d-sm-block">22 Oct 2020</td>
                                <td><i class="material-icons text-success cur-default" title="Good">check_circle</i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-white">
                    <div class="row">
                        <div class="col">
                            <div class="small text-truncate text-black-50">Avg. Performance</div>
                            <div class="text-success" style="font-size: 1.2rem;"><i class="material-icons mr-2">check_circle</i>80%</div>
                        </div>
                        <div class="col">
                            <div class="small text-truncate text-black-50">Avg. Progress</div>
                            <div class="text-success" style="font-size: 1.2rem;"><i class="material-icons mr-2">check_circle</i>88%</div>
                        </div>
                        <div class="col mb-3 mb-lg-0">
                            <div class="small text-black-50">Issue</div>
                            <div class="text-danger" style="font-size: 1.2rem;"><i class="material-icons mr-2">warning</i>1</div>
                        </div>
                        <div class="col">
                            <div class="small text-black-50">Out-date</div>
                            <div class="text-muted" style="font-size: 1.2rem;"><i class="material-icons mr-2">watch_later</i>1</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Chartjs progress Region 1
    var cProg1 = document.getElementById('cProgress1');
    var cProgress1 = new Chart(cProg1, {
        type: 'doughnut',
        data: {
            labels: ['Done', 'Undone'],
            datasets: [{
                label: 'Progress',
                data: [83, 17],
                backgroundColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(183, 186, 191, 0.3)'
                ]
            }]
        },
        options: {
            elements: {
                arc: {
                    borderWidth: 0
                }
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    // Chartjs progress Region 2
    var cProg2 = document.getElementById('cProgress2');
    var cProgress2 = new Chart(cProg2, {
        type: 'doughnut',
        data: {
            labels: ['Done', 'Undone'],
            datasets: [{
                label: 'Progress',
                data: [77, 23],
                backgroundColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(183, 186, 191, 0.3)'
                ]
            }]
        },
        options: {
            elements: {
                arc: {
                    borderWidth: 0
                }
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    // Chartjs progress Region 3
    var cProg3 = document.getElementById('cProgress3');
    var cProgress3 = new Chart(cProg3, {
        type: 'doughnut',
        data: {
            labels: ['Done', 'Undone'],
            datasets: [{
                label: 'Progress',
                data: [100, 0],
                backgroundColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(183, 186, 191, 0.3)'
                ]
            }]
        },
        options: {
            elements: {
                arc: {
                    borderWidth: 0
                }
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    // Chartjs progress Region 4
    var cProg4 = document.getElementById('cProgress4');
    var cProgress4 = new Chart(cProg4, {
        type: 'doughnut',
        data: {
            labels: ['Done', 'Undone'],
            datasets: [{
                label: 'Progress',
                data: [93, 7],
                backgroundColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(183, 186, 191, 0.3)'
                ]
            }]
        },
        options: {
            elements: {
                arc: {
                    borderWidth: 0
                }
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });

    // Chartjs progress Region 5
    var cProg5 = document.getElementById('cProgress5');
    var cProgress5 = new Chart(cProg5, {
        type: 'doughnut',
        data: {
            labels: ['Done', 'Undone'],
            datasets: [{
                label: 'Progress',
                data: [88, 12],
                backgroundColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(183, 186, 191, 0.3)'
                ]
            }]
        },
        options: {
            elements: {
                arc: {
                    borderWidth: 0
                }
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80
        }
    });


    // Chartjs production summary
    var cProd = document.getElementById('cProductionS');
    var cProductionS = new Chart(cProd, {
        type: 'bar',
        data: {
            labels: ['Region 1', 'Region 2', 'Region 3', 'Region 4', 'Region 5'],
            datasets: [{
                label: 'Production',
                data: [100000, 150000, 200000, 300000, 300000],
                backgroundColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    barPercentage: 0.4
                }]
            }
        }
    });

    // Chartjs performance
    var dRegion1 = {
        label: "Region 1",
        data: [60000, 100000, 100000, 100000, 100000, 100000, 100000],
        lineTension: 0,
        fill: 'false',
        borderColor: 'rgba(255, 99, 132, 1)',
        backgroundColor: 'rgba(255, 99, 132, 1)'
    };

    var dRegion2 = {
        label: "Region 2",
        data: [120000, 120000, 150000, 150000, 150000, 150000, 150000],
        lineTension: 0,
        fill: 'false',
        borderColor: 'rgba(54, 162, 235, 1)',
        backgroundColor: 'rgba(54, 162, 235, 1)'
    };

    var dRegion3 = {
        label: "Region 3",
        data: [140000, 140000, 140000, 200000, 200000, 200000, 200000],
        lineTension: 0,
        fill: 'false',
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 1)'
    };

    var dRegion4 = {
        label: "Region 4",
        data: [280000, 300000, 300000, 300000, 300000, 300000, 300000],
        lineTension: 0,
        fill: 'false',
        borderColor: 'rgba(255, 99, 132, 1)',
        backgroundColor: 'rgba(255, 99, 132, 1)'
    };

    var dRegion5 = {
        label: "Region 5",
        data: [200000, 200000, 200000, 300000, 300000, 300000, 300000],
        lineTension: 0,
        fill: 'false',
        borderColor: 'rgba(153, 102, 255, 1)',
        backgroundColor: 'rgba(153, 102, 255, 1)'
    };
    
    var cPerf = document.getElementById('cPerformance');
    var dsPerf = {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      datasets: [ dRegion1, dRegion2, dRegion3, dRegion4, dRegion5]
    };
    var stackedLine = new Chart( cPerf, {
        type: 'line',
        data: dsPerf,
        options: {
            scales: {
                yAxes: [{
                    stacked: false
                }]
            },
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                  boxWidth: 12,
                }
            },
            maintainAspectRatio: false
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