<!-- Css (private use only) -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/datatables/dataTables.bootstrap4.min.css">

<!-- Js (private use only) -->
<script src="<?=base_url();?>assets/daterangepicker/moment.min.js"></script>
<script src="<?=base_url();?>assets/daterangepicker/daterangepicker.min.js"></script>
<script src="<?=base_url();?>assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/datatables/dataTables.bootstrap4.min.js"></script>

<div class="container-fluid mt-5 pt-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-3">
                <div class="card-header bg-white py-2">
                	<div class="row">
                		<div class="col-12 col-lg-2 mb-2">
	                        <select class="form-control" id="exampleFormControlSelect1">
	                          <option>All Location</option>
	                          <option>Wilayah 1</option>
	                          <option>Wilayah 2</option>
	                          <option>Wilayah 3</option>
	                          <option>Wilayah 4</option>
	                          <option>Wilayah 5</option>
	                        </select>
	                    </div>
	                    <div class="col-12 col-lg-4 mb-2">
	                    	<div class="rounded text-muted" id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
							    <i class="material-icons mr-2">date_range</i>
							    <span class="text-dark"></span></i>
							</div>
	                    </div>
	                    <div class="col-12 col-lg-2 mb-2 ml-auto text-right">
		                    <div class="btn-group w-100" role="group" aria-label="Button group with nested dropdown">
							  <button type="button" class="btn btn-outline-success"><i class="material-icons mr-lg-2">get_app</i>Export</button>

							  <div class="btn-group" role="group">
							    <button id="btnGroupDrop1" type="button" class="btn btn-outline-success dropdown-toggle pl-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    </button>
							    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
							      <a class="dropdown-item text-muted" href="#"><i class="material-icons mr-3">print</i>Print</a>
							    </div>
							  </div>
							</div>
		                </div>
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
    // datatables
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

    // daterangepicker
    $(function() {

	    var start = moment().subtract(29, 'days');
	    var end = moment();

	    function cb(start, end) {
	        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	    }

	    $('#reportrange').daterangepicker({
	        startDate: start,
	        endDate: end,
	        ranges: {
	           'Today': [moment(), moment()],
	           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
	           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
	           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
	           'This Month': [moment().startOf('month'), moment().endOf('month')],
	           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	        }
	    }, cb);

	    cb(start, end);

	});

</script>