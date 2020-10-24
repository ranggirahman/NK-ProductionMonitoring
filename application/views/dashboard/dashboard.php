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
        <div class="col-12 col-lg-5 pl-lg-0">
            <div class="card shadow-sm mb-3">
                <div class="card-header justify-content-between d-flex bg-white py-2">
                    <div class="font-weight-light my-auto">
                        <div style="font-size:18px;" class="text-black-50">Table</div>
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
                <div class="card-body px-1 px-lg-4 py-lg-3">
                    <table id="example" class="display table table-bordered" cellspacing="0" width="100%">
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
                                <td>Edinburgh</td>
                                <td>61</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Singapore</td>
                                <td>29</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>New York</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>New York</td>
                                <td>27</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>New York</td>
                                <td>27</td>
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
            select: false,
            "columnDefs": [{
                className: "Name", 
                "targets":[0],
                "visible": false,
                "searchable":false
            }]
        });//End of create main table

      
      $('#example tbody').on( 'click', 'tr', function () {
       
        alert(table.row( this ).data()[0]);

    } );
    });

</script>