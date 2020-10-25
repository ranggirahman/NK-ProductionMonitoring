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
        <div class="col-12 col-lg-4 pr-lg-0">
        	<div class="card mb-3">
        		<div class="card-header bg-white py-2">
        			<div class="row">
        				<div class="col my-auto"><i class="material-icons text-muted mr-2">inbox</i>Approval</div>
        				<div class="col"><input class="form-control" type="" name=""></div>
        			</div>
        		</div>
        		<div class="card-body shadow-sm">
        			
        		</div>
        	</div>
        	<div class="card mb-3">
        		<div class="card-body shadow-sm">
        			<div class="justify-content-between d-flex">
        				<div>
        					<div>Production Target</div>
        					<div class="small text-muted">On progress until 23 Dec 2020</div>
        				</div>
        				<div><button class="btn btn-primary" data-toggle="modal" data-target="#mProductionT"><i class="material-icons">post_add</i></button></div>
        			</div>
        		</div>
        	</div>
        	<div class="card mb-3">
        		<div class="card-body shadow-sm">
        			<div class="justify-content-between d-flex">
        				<div>
        					<div>Daily Report</div>
        					<div class="small text-muted">Your report will outdated in 2 days</div>
        				</div>
        				<div><button class="btn btn-primary" data-toggle="modal" data-target="#mDailyR"><i class="material-icons">add</i></button></div>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm mb-3">
                <div class="card-header bg-white pt-2 pb-0">
                	<div class="row">
                		<div class="col-12 col-lg-3 mb-2 d-flex">
                			<i class="material-icons text-muted mr-3 my-auto">filter_alt</i>
	                        <select class="form-control" id="">
	                          <option>All Location</option>
	                          <option>Region 1</option>
	                          <option>Region 2</option>
	                          <option>Region 3</option>
	                          <option>Region 4</option>
	                          <option>Region 5</option>
	                        </select>
	                    </div>
	                    <div class="col-12 col-lg-5 pl-lg-0 mb-2">
	                    	<div class="rounded text-muted" id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
							    <i class="material-icons mr-2">date_range</i>
							    <span class="text-dark"></span></i>
							</div>
	                    </div>
	                    <div class="col-12 col-lg-4 mb-2 ml-auto text-right">
		                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
							  <button type="button" class="btn btn-outline-success py-0"><i class="material-icons mr-lg-2">insert_drive_file</i>Export</button>

							  <div class="btn-group " role="group">
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
                <div class="card-body px-1 p-lg-4">
                    <table id="example" class="display table" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Production</th>
                            </tr>
                        </thead>
                 
                       <tbody>
                            <tr>
                                <td>1</td>
                                <td>22 Oct 2020</td>
                                <td>Region 3</td>
                                <td>200000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>22 Oct 2020</td>
                                <td>Region 5</td>
                                <td>300000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>21 Oct 2020</td>
                                <td>Region 2</td>
                                <td>150000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>21 Oct 2020</td>
                                <td>Region 4</td>
                                <td>300000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>20 Oct 2020</td>
                                <td>Region 1</td>
                                <td>100000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>19 Oct 2020</td>
                                <td>Region 3</td>
                                <td>140000</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>19 Oct 2020</td>
                                <td>Region 5</td>
                                <td>200000</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>19 Oct 2020</td>
                                <td>Region 2</td>
                                <td>120000</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>19 Oct 2020</td>
                                <td>Region 4</td>
                                <td>280000</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>19 Oct 2020</td>
                                <td>Region 1</td>
                                <td>60000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal report approval -->
<div class="modal fade mt-5" id="mReportA" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mReportALabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header bg-nk py-2">
        		<h5 class="modal-title font-weight-light" style="font-size: 16px;" id="mReportALabel">Report Approval</h5>
       			<i class="material-icons text-white cur-pointer my-auto" data-dismiss="modal">close</i>
      		</div>
	      	<div class="modal-body">
			  	<div class="form-group">
			    	<label class="small" for="">Location</label>
			    	<select class="form-control" id="">
		              <option>Select Location</option>
		              <option>Region 1</option>
		              <option>Region 2</option>
		              <option>Region 3</option>
		              <option>Region 4</option>
		              <option>Region 5</option>
	            	</select>
			  	</div>
			  	<div class="row">
			  		<div class="col-12 col-lg-6">
			  			<div class="form-group">
					    	<label class="small" for="">Start</label>
					    	<input class="form-control" type="text" name="sProduction" value="10/24/2020" />
					  	</div>
			  		</div>
				  	<div class="col-12 col-lg-6">
				  		<div class="form-group">
						    <label class="small" for="">End</label>
						    <input class="form-control" type="text" name="eProduction" value="10/24/2020" />
						</div>
				  	</div>
			  	</div>
			  	<div class="form-group">
				    <label class="small" for="">Amount of Production</label>
				    <input type="number" class="form-control" id="">
				</div>
			</div>
	      	<div class="modal-footer justify-content-between py-1">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	        	<button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
	     	</div>
    	</div>
  	</div>
</div>

<!-- Modal production target -->
<div class="modal fade mt-5" id="mProductionT" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mProductionTLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header bg-nk py-2">
        		<h5 class="modal-title font-weight-light" style="font-size: 16px;" id="mProductionTLabel">Production Target</h5>
       			<i class="material-icons text-white cur-pointer my-auto" data-dismiss="modal">close</i>
      		</div>
	      	<div class="modal-body">
			  	<div class="form-group">
			    	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">place</i>Location</label>
			    	<select class="form-control" id="">
		              <option>Select Location</option>
		              <option>Region 1</option>
		              <option>Region 2</option>
		              <option>Region 3</option>
		              <option>Region 4</option>
		              <option>Region 5</option>
	            	</select>
			  	</div>
			  	<div class="row">
			  		<div class="col-12 col-lg-6 pr-lg-1">
			  			<div class="form-group">
					    	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">today</i>Start</label>
					    	<input class="form-control" type="text" name="sProduction" value="10/24/2020" />
					  	</div>
			  		</div>
				  	<div class="col-12 col-lg-6 pl-lg-1">
				  		<div class="form-group">
						    <label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">event</i>End</label>
						    <input class="form-control" type="text" name="eProduction" value="10/24/2020" />
						</div>
				  	</div>
			  	</div>
			  	<div class="form-group">
				    <label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">widgets</i>Amount of Production</label>
				    <input type="number" class="form-control" id="">
				</div>
			</div>
	      	<div class="modal-footer justify-content-between py-1">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	        	<button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
	     	</div>
    	</div>
  	</div>
</div>

<!-- Modal daily report -->
<div class="modal fade mt-5" id="mDailyR" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mDailyRLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header bg-nk py-2">
        		<h5 class="modal-title font-weight-light" style="font-size: 16px;" id="mDailyRLabel">Daily Report</h5>
       			<i class="material-icons text-white cur-pointer my-auto" data-dismiss="modal">close</i>
      		</div>
	      	<div class="modal-body">
			  	<div class="row">
			  		<div class="col-3 text-muted" style="font-size: 14px;">Location</div>
			  		<div class="col-8" style="font-size: 14px;">Region 1</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted" style="font-size: 14px;">Amount</div>
			  		<div class="col-8" style="font-size: 14px;"><span class="text-muted">80000</span> / 120000 <span class="text-muted small">(25% to go)</span></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted" style="font-size: 14px;">End Date</div>
			  		<div class="col-8" style="font-size: 14px;">24 Dec 2020</div>
			  	</div>
			  	<hr>
			  	<div class="row">
			  		<div class="col-12 col-lg-4 pr-lg-0">
			  			<div class="form-group">
					    	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">calendar_today</i>Date</label>
					    	<input class="form-control" type="text" name="dReport" value="10/24/2020"/>
					  	</div>
			  		</div>
				  	<div class="col-12 col-lg-8">
				  		<div class="form-group">
						    <label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 15px; opacity: 0.6;">attach_file</i>Evidence</label>
						    <div class="custom-file">
							  <input type="file" class="custom-file-input" id="customFile">
							  <label class="custom-file-label" for="customFile">Choose file</label>
							</div>
						</div>
				  	</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-12 col-lg-9">
			  			<div class="form-group">
					    	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">widgets</i>Amount</label>
					    	<input type="number" class="form-control" min="80000" max="120000" id="">
					  	</div>
			  		</div>
				  	<div class="col-12 col-lg-3 pl-lg-0">
				  		<div class="form-group">
						    <label class="small" for="">Performance (%)</label>
						    <input type="number" class="form-control" min="0" max="100" id="">
						</div>
				  	</div>
			  	</div>
			  	<div class="form-group">
				  	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 15px; opacity: 0.6;">note</i>Note</label>
				  	<textarea class="form-control"></textarea>
				</div>
				<div class="form-group">
			  		<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 15px; opacity: 0.6;">warning</i>Issue</label>
			  		<textarea class="form-control"></textarea>
			  	</div>
			</div>
	      	<div class="modal-footer justify-content-between py-1">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	        	<button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
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

    // daterangepicker production log
    $(function() {

	    var start = moment().subtract(29, 'days');
	    var end = moment();

	    function cb(start, end) {
	        $('#reportrange span').html(start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY'));
	    }

	    $('#reportrange').daterangepicker({
	    	"autoApply": true,
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

	// datepicker production target
	$(function() {
	  $('input[name="sProduction"]').daterangepicker({
	  	"autoApply": true,
	    singleDatePicker: true,
	    showDropdowns: true,
	    minYear: 2020
	  }, function(start, end, label) {
	    var years = moment().diff(start, 'years');
	  });
	});
	$(function() {
	  $('input[name="eProduction"]').daterangepicker({
	  	"autoApply": true,
	    singleDatePicker: true,
	    showDropdowns: true,
	    minYear: 2020
	  }, function(start, end, label) {
	    var years = moment().diff(start, 'years');
	  });
	});

	// datepicker daily report
	$(function() {
	  $('input[name="dReport"]').daterangepicker({
	  	"autoApply": true,
	    singleDatePicker: true,
	    showDropdowns: true,
	    minYear: 2020
	  }, function(start, end, label) {
	    var years = moment().diff(start, 'years');
	  });
	});

</script>