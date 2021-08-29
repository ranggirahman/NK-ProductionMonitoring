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
        	<div class="card shadow-sm mb-3">
        		<div class="card-header bg-white py-2">
        			<div class="row">
        				<div class="col-5 my-auto text-muted"><i class="material-icons mr-2" style="opacity: 0.6;">inbox</i>Draft Box</div>
        				<div class="col-7"><input class="form-control form-control-sm" type="" name="" placeholder="Search"></div>
        			</div>
        		</div>
        		<div class="card-body py-0">
        			<table id="tDraftB" class="display table table-sm table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th></th>
                                <th>Date</th>
                                <th>Summary</th>
                                <th><i class="material-icons">assignment</i></th>
                            </tr>
                        </thead>
                 
                        <tbody>
                        	<tr>
                                <td>1</td>
                                <td><i class="material-icons text-danger" style="opacity: 0.8; font-size: 14px;">fiber_manual_record</i></td>
                                <td>25 Oct 2020</td>
                                <td class="small">
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">place</i>Region 4</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">widgets</i>320000/320000 (+20000)</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">speed</i>80% <span class="text-danger">(-5%)</span></div>
                                </td>
                                <td style="vertical-align: middle;"><i class="material-icons text-primary cur-noselect" data-toggle="tooltip" data-placement="top" title="Need action">assignment_late</i></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><i class="material-icons text-danger" style="opacity: 0.8; font-size: 14px;">fiber_manual_record</i></td>
                                <td>25 Oct 2020</td>
                                <td class="small">
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">place</i>Region 1</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">widgets</i><span class="text-muted">120000</span>/120000 (+20000)</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">speed</i>100% <span class="text-muted">(-)</span></div>
                                </td>
                                <td style="vertical-align: middle;"><i class="material-icons text-danger cur-noselect" data-toggle="tooltip" data-placement="top" title="Returned">assignment_returned</i></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td></td>
                                <td>22 Oct 2020</td>
                                <td class="small">
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">place</i>Region 3</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">widgets</i><span class="text-muted">200000</span>/200000 (+60000)</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">speed</i>100% <span class="text-success">(+2%)</span></div>
                                </td>
                                <td style="vertical-align: middle;"><i class="material-icons text-success cur-noselect" data-toggle="tooltip" data-placement="top" title="Approved">assignment_turned_in</i></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td></td>
                                <td>22 Oct 2020</td>
                                <td class="small">
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">place</i>Region 5</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">widgets</i><span class="text-muted">300000</span>/340000 (+100000)</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">speed</i>100% <span class="text-success">(+5%)</span></div>
                                </td>
                                <td style="vertical-align: middle;"><i class="material-icons text-success cur-noselect" data-toggle="tooltip" data-placement="top" title="Approved">assignment_turned_in</i></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td></td>
                                <td>1 Jan 2020</td>
                                <td class="small">
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">place</i>Region 2</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">widgets</i>195000</div>
                                	<div><i class="material-icons mr-1" style="font-size: 12px;">date_range</i>30 Mar 2020 - 20 Dec 2020</div>
                                </td>
                                <td style="vertical-align: middle;"><i class="material-icons text-success cur-noselect" data-toggle="tooltip" data-placement="top" title="Approved">assignment_turned_in</i></td>
                            </tr>
                        </tbody>
                    </table>
        		</div>
        		<div class="card-footer bg-white pt-2 pb-0">
        			<nav aria-label="Page navigation">
					  <ul class="pagination pagination-sm justify-content-end mb-2">
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Previous">
					        <i class="material-icons" style="font-size: 18px;">chevron_left</i>
					      </a>
					    </li>
					    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Next">
					        <i class="material-icons" style="font-size: 18px;">chevron_right</i>
					      </a>
					    </li>
					  </ul>
					</nav>
        		</div>
        	</div>
        </div>
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm mb-3">
                <div class="card-header bg-white pb-1 pt-lg-2 pb-lg-0">
                	<div class="row">
                		<div class="col-12 col-lg-3 mb-2 d-flex">
                			<i class="material-icons text-muted d-none d-sm-block mr-3 my-auto" style="opacity: 0.6;">filter_alt</i>
	                        <select class="form-control form-control-sm" id="">
	                          <option>All Location</option>
	                          <option>Region 1</option>
	                          <option>Region 2</option>
	                          <option>Region 3</option>
	                          <option>Region 4</option>
	                          <option>Region 5</option>
	                        </select>
	                    </div>
	                    <div class="col-12 col-lg-4 pl-lg-0 mb-2">
	                    	<div class="rounded text-muted form-control-sm" id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
							    <i class="material-icons mr-2" style="font-size: 16px;">date_range</i>
							    <span class="text-dark"></span></i>
							</div>
	                    </div>
	                    <div class="col-12 col-lg-4 mb-2 ml-auto text-right">
                            <div class="btn-group">
                                <button class="btn btn-success btn-sm" type="button">
                                    <i class="material-icons mr-lg-2" style="font-size: 16px;">file_download</i>Export
                                </button>
                                <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item text-muted" href="#" style="font-size: 14px;"><i class="material-icons mr-2" style="font-size: 16px;">print</i>Print</a>
                                </div>
                            </div>
		                </div>
                	</div>
                </div>
                <div class="card-body py-0">
                    <table id="tReport" class="display table table-sm table-responsive-sm text-nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Progress</th>
                                <th>Production</th>
                                <th>Perf.</th>
                                <th>Note</th>
                                <th><i class="material-icons">info</i></th>
                            </tr>
                        </thead>
                 
                       <tbody>
                            <tr>
                                <td>1</td>
                                <td>22 Oct 2020</td>
                                <td>Region 3</td>
                                <td class="text-right">200000 / 200000</td>
                                <td class="text-right"><span class="text-muted">+</span>60000</td>
                                <td>100<span class="text-muted">%</span></td>
                                <td>Sudah serah terima</td>
                                <td><i class="material-icons text-success cur-pointer" data-toggle="tooltip" data-placement="top" title="Delivered">local_shipping</i></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>22 Oct 2020</td>
                                <td>Region 5</td>
                                <td class="text-right"><span class="text-muted">300000</span> / 340000</td>
                                <td class="text-right"><span class="text-muted">+</span>100000</td>
                                <td>100<span class="text-muted">%</span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>21 Oct 2020</td>
                                <td>Region 2</td>
                                <td class="text-right"><span class="text-muted">150000</span> / 195000</td>
                                <td class="text-right"><span class="text-muted">+</span>30000</td>
                                <td>96<span class="text-muted">%</span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>21 Oct 2020</td>
                                <td>Region 4</td>
                                <td class="text-right"><span class="text-muted">300000</span> / 320000</td>
                                <td class="text-right"><span class="text-muted">+</span>20000</td>
                                <td>80<span class="text-muted">%</span></td>
                                <td>Produksi terhambat</td>
                                <td><i class="material-icons text-danger cur-pointer" data-toggle="tooltip" data-placement="top" title="Have Issue">warning</i></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>20 Oct 2020</td>
                                <td>Region 1</td>
                                <td class="text-right"><span class="text-muted">100000</span> / 120000</td>
                                <td class="text-right"><span class="text-muted">+</span>60000</td>
                                <td>100<span class="text-muted">%</span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>19 Oct 2020</td>
                                <td>Region 3</td>
                                <td class="text-right"><span class="text-muted">140000</span> / 200000</td>
                                <td class="text-right"><span class="text-muted">+</span>20000</td>
                                <td>98<span class="text-muted">%</span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>19 Oct 2020</td>
                                <td>Region 5</td>
                                <td class="text-right"><span class="text-muted">200000</span> / 340000</td>
                                <td class="text-right"><span class="text-muted">+</span>40000</td>
                                <td>95<span class="text-muted">%</span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>19 Oct 2020</td>
                                <td>Region 2</td>
                                <td class="text-right"><span class="text-muted">120000</span> / 195000</td>
                                <td class="text-right"><span class="text-muted">+</span>25000</td>
                                <td>98<span class="text-muted">%</span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>19 Oct 2020</td>
                                <td>Region 4</td>
                                <td class="text-right"><span class="text-muted">280000</span> / 320000</td>
                                <td class="text-right"><span class="text-muted">+</span>80000</td>
                                <td>85<span class="text-muted">%</span></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>19 Oct 2020</td>
                                <td>Region 1</td>
                                <td class="text-right"><span class="text-muted">60000</span> / 120000</td>
                                <td class="text-right"><span class="text-muted">+</span>60000</td>
                                <td>95<span class="text-muted">%</span></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-white pt-2 pb-0">
        			<nav aria-label="Page navigation">
					  <ul class="pagination pagination-sm justify-content-end mb-2">
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Previous">
					        <i class="material-icons" style="font-size: 18px;">chevron_left</i>
					      </a>
					    </li>
					    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Next">
					        <i class="material-icons" style="font-size: 18px;">chevron_right</i>
					      </a>
					    </li>
					  </ul>
					</nav>
        		</div>
            </div>
        </div>
    </div>
</div>

<!-- Modal draft approval -->
<div class="modal fade mt-5" id="mDraftA" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mDraftALabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header py-2">
        		<h5 class="modal-title text-nk" style="font-size: 16px;" id="mDraftALabel"><i class="material-icons mr-2" style="opacity: 0.6;">receipt</i>Draft Approval</h5>
       			<i class="material-icons text-muted cur-pointer my-auto" data-dismiss="modal">close</i>
      		</div>
	      	<div class="modal-body">
			  	<div class="row">
			  		<div class="col-3 text-muted">Location</div>
			  		<div class="col">Region 4</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Date</div>
			  		<div class="col">25 Oct 2020</div>
			  	</div>
                <div class="row">
                    <div class="col-3 text-muted">By</div>
                    <div class="col">Anisa Urahmi - 512511</div>
                </div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Production</div>
			  		<div class="col">320000 / 320000 <span class="text-muted small">(100%)</span></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Performance</div>
			  		<div class="col">80% <span class="text-danger small">(-5% last report)</span></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Evidence</div>
			  		<div class="col"><a href="">Photo 12.jpg<i class="material-icons ml-1" style="font-size: 18px;">download_alt</i></a></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Note</div>
			  		<div class="col"><span class="text-muted" style="opacity: 0.5;">-</span></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Issue</div>
			  		<div class="col"><span class="text-muted" style="opacity: 0.5;">-</span></div>
			  	</div>
			  	<hr>
			  	<div class="form-group">
				  	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 15px; opacity: 0.6;">mode_comment</i>Comment</label>
				  	<textarea class="form-control"></textarea>
				</div>
			</div>
	      	<div class="modal-footer justify-content-between py-1">
	        	<button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Cancel</button>
	        	<div>
		        	<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Return</button>
		        	<button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Approve</button>
		        </div>
	     	</div>
    	</div>
  	</div>
</div>

<!-- Modal draft approval -->
<div class="modal fade mt-5" id="mPreviewR" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mPreviewRLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header py-2">
        		<h5 class="modal-title text-nk" style="font-size: 16px;" id="mPreviewRLabel"><i class="material-icons mr-2" style="opacity: 0.6;">description</i>Report Region 3 <span class="font-weight-light">(22 Oct 2020)</span></h5>
       			<i class="material-icons text-muted cur-pointer my-auto" data-dismiss="modal">close</i>
      		</div>
	      	<div class="modal-body">
			  	<div class="row">
			  		<div class="col-3 text-muted">Location</div>
			  		<div class="col">Region 3</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Date</div>
			  		<div class="col">22 Oct 2020</div>
			  	</div>
                <div class="row">
                    <div class="col-3 text-muted">By</div>
                    <div class="col">Anisa Urahmi - 512511</div>
                </div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Production</div>
			  		<div class="col">200000 / 200000 <span class="text-muted small">(100%)</span></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Performance</div>
			  		<div class="col">80% <span class="text-danger small">(-5% last report)</span></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Evidence</div>
			  		<div class="col"><a href="">Berkas Penyerahan.zip<i class="material-icons ml-1" style="font-size: 18px;">download_alt</i></a></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Note</div>
			  		<div class="col">"Sudah serah terima"</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Issue</div>
			  		<div class="col"><span class="text-muted" style="opacity: 0.5;">-</span></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted">Comment</div>
			  		<div class="col">
			  			<div>Pak Damar "Laporan sudah lengkap"</div>
			  		</div>
			  	</div>
			</div>
	      	<div class="modal-footer justify-content-between py-1">
	        	<button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</button>
	        	<div class="btn-group">
                    <button class="btn btn-success btn-sm" type="button">
                        <i class="material-icons mr-lg-2" style="font-size: 16px;">file_download</i>Export
                    </button>
                    <button type="button" class="btn btn-sm btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item text-muted" href="#" style="font-size: 14px;"><i class="material-icons mr-2" style="font-size: 16px;">print</i>Print</a>
                    </div>
                </div>
	        </div>
    	</div>
  	</div>
</div>





<script>
	// datatables draft box
    $(document).ready(function() {
        var table = $('#tDraftB').DataTable({ 
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

        $('#tDraftB tbody').on( 'click', 'tr', function () {
       
        //alert(table.row( this ).data()[0]);
        $('#mDraftA').modal('show');

    } );
    });

    // datatables report
    $(document).ready(function() {
      var table = $('#tReport').DataTable({ 
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

      
      $('#tReport tbody').on( 'click', 'tr', function () {
       
        //alert(table.row( this ).data()[0]);
        $('#mPreviewR').modal('show');
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