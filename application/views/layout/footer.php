
</body>
</html>

<style type="text/css">
	/* Collapse False */
	#cTProblemR[aria-expanded="false"] .icon-collapse::after {
	  content: " keyboard_arrow_down";
	  font-family: Material Icons;
	  display: inline;
	  text-align: right;
	}
	/* Collapse True */
	#cTProblemR[aria-expanded="true"] .icon-collapse::after {
	  content: " keyboard_arrow_up";
	  font-family: Material Icons;
	  display: inline;
	  text-align: right;
	}
</style>


<!-- Modal production target -->
<div class="modal fade mt-5" id="mProductionT" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mProductionTLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header py-2">
        		<h5 class="modal-title text-nk" style="font-size: 16px;" id="mProductionTLabel"><i class="material-icons mr-2" style="opacity: 0.6;">post_add</i>Production Target</h5>
       			<i class="material-icons text-muted cur-pointer my-auto" data-dismiss="modal">close</i>
      		</div>
	      	<div class="modal-body">
			  	<div class="form-group">
			    	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">place</i>Location</label>
			    	<select class="form-control form-control-sm" id="">
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
					    	<input class="form-control form-control-sm" type="text" name="sProduction" value="10/24/2020" />
					  	</div>
			  		</div>
				  	<div class="col-12 col-lg-6 pl-lg-1">
				  		<div class="form-group">
						    <label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">event</i>End</label>
						    <input class="form-control form-control-sm" type="text" name="eProduction" value="10/24/2020" />
						</div>
				  	</div>
			  	</div>
			  	<div class="form-group">
				    <label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">widgets</i>Target Production</label>
				    <input type="number" class="form-control form-control-sm" id="">
				</div>
				<div class="form-group">
				    <label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 15px; opacity: 0.6;">description</i>Document</label>
				    <div class="input-group">
					    <div class="custom-file">
						  <input type="file" class="custom-file-input form-control-sm" id="customFile">
						  <label class="custom-file-label col-form-label-sm" for="customFile">Choose file</label>
						</div>
					</div>
				</div>
			</div>
	      	<div class="modal-footer justify-content-between py-1">
	        	<button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Cancel</button>
	        	<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Submit</button>
	     	</div>
    	</div>
  	</div>
</div>

<!-- Modal daily report -->
<div class="modal fade mt-5" id="mDailyR" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mDailyRLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header py-2">
        		<h5 class="modal-title text-nk" style="font-size: 16px;" id="mDailyRLabel"><i class="material-icons mr-2" style="opacity: 0.6;">add_task</i>Daily Report</h5>
       			<i class="material-icons text-muted cur-pointer my-auto" data-dismiss="modal">close</i>
      		</div>
	      	<div class="modal-body">
			  	<div class="row">
			  		<div class="col-3 text-muted" style="font-size: 14px;">Location</div>
			  		<div class="col" style="font-size: 14px;">Region 1</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted" style="font-size: 14px;">Last Progress</div>
			  		<div class="col" style="font-size: 14px;"><span class="text-muted">100000</span> / 120000 <span class="text-muted small">(83%)</span></div>
			  	</div>
			  	<div class="row">
			  		<div class="col-3 text-muted" style="font-size: 14px;">Target Date</div>
			  		<div class="col" style="font-size: 14px;">20 Oct 2020 - 24 Dec 2020 <span class="text-muted small">(60d left)</span></div>
			  	</div>
			  	<hr>
			  	<div class="row">
			  		<div class="col-12 col-lg-4 pr-lg-0">
			  			<div class="form-group">
					    	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">calendar_today</i>Date</label>
					    	<input class="form-control form-control-sm" type="text" name="dReport" value="10/24/2020"/>
					  	</div>
			  		</div>
				  	<div class="col-12 col-lg-8">
				  		<div class="form-group">
						    <label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 15px; opacity: 0.6;">attach_file</i>Evidence</label>
						    <div class="custom-file">
							  <input type="file" class="custom-file-input form-control-sm" id="customFile">
							  <label class="custom-file-label col-form-label-sm" for="customFile">Choose file</label>
							</div>
						</div>
				  	</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-12 col-lg-9">
			  			<div class="form-group">
					    	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">widgets</i>Amount</label>
					    	<div class="input-group input-group-sm border rounded">
							  <div class="input-group-prepend cur-noselect">
							    <span class="input-group-text bg-white border-0"><i class="material-icons my-auto" style="font-size: 16px;">add</i></span>
							  </div>
							  <input type="number" class="form-control form-control-sm border-0" placeholder="100000">
							  <div class="input-group-append cur-pointer border-0">
							    <span class="input-group-text bg-white border-0 px-2"><i class="material-icons my-auto" style="font-size: 16px;" data-html="true" data-toggle="tooltip" data-placement="top" title="<div class='text-right'>100000<br/><b>400</b><br/>+ ______________<br/>100400</div>">info</i></span>
							  </div>
							</div>
					  	</div>
			  		</div>
				  	<div class="col-12 col-lg-3 pl-lg-0">
				  		<div class="form-group">
						    <label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 13px; opacity: 0.5;">speed</i>Performance</label>
						    <div class="input-group input-group-sm border rounded">
							  <input type="number" class="form-control form-control-sm border-0" aria-label="Amount (to the nearest dollar)">
							  <div class="input-group-append cur-pointer border-0">
							    <span class="input-group-text bg-white border-0">%</span>
							  </div>
							</div>
						</div>
				  	</div>
			  	</div>
			  	<div class="form-group">
				  	<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 15px; opacity: 0.6;">note</i>Note</label>
				  	<textarea class="form-control form-control-sm"></textarea>
				</div>
				<div class="form-group">
			  		<label class="small" for=""><i class="material-icons text-muted mr-1" style="font-size: 15px; opacity: 0.6;">warning</i>Issue</label>
			  		<textarea class="form-control form-control-sm"></textarea>
			  	</div>
			</div>
	      	<div class="modal-footer justify-content-between py-1">
	        	<button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Cancel</button>
	        	<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Submit</button>
	     	</div>
    	</div>
  	</div>
</div>

<!-- Modal Help -->
<div class="modal fade mt-5" id="mHelp" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mHelpLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header py-2">
        		<h5 class="modal-title text-nk" style="font-size: 16px;" id="mHelp"><i class="material-icons mr-2" style="opacity: 0.6;">help</i>Help</h5>
       			<i class="material-icons text-muted cur-pointer my-auto" data-dismiss="modal">close</i>
      		</div>
	      	<div class="modal-body p-2">
	      		<div class="row">
	      			<div class="col-sm-12 col-lg-6 pr-lg-1">
	      				<a href="" class="text-muted">
			  				<div class="border rounded justify-content-between d-flex mb-2 p-2">
			  					<div class="d-flex">
							  		<i class="material-icons mx-2 my-auto" style="opacity: 0.5; font-size: 2rem;">insert_drive_file</i>
							  		<div>
							  			<div class="mb-n1" style="font-size: 10px;">Download</div>
							  			<div class="font-weight-light text-dark" style="font-size: 14px;">User Guide</div>
							  		</div>
							  	</div>
							  	<div class="my-auto">
							  		<i class="material-icons mx-2">get_app</i>
							  	</div>
						  	</div>
						</a>
	      			</div>
		      		<div class="col-sm-12 col-lg-6 pl-lg-1">
				  		<div class="border rounded text-muted cur-pointer cur-noselect d-flex justify-content-between p-2" data-toggle="collapse" href="#cProblemR" id="cTProblemR" aria-expanded="false">
				  			<div class="d-flex">
						  		<i class="material-icons mx-2 my-auto" style="opacity: 0.5; font-size: 2rem;">contact_support</i>
						  		<div>
						  			<div class="mb-n1" style="font-size: 10px;">Need Assistance ?</div>
						  			<div class="font-weight-light text-dark" style="font-size: 14px;">Report a Problem</div>
						  		</div>
						  	</div>
						  	<div class="my-auto">
						  		<i class="material-icons icon-collapse mx-2"></i>
						  	</div>
				  		</div>
					</div>
				</div>
			  	<div class="collapse" id="cProblemR">
			  		<div class="card">
				  		<div class="card-body px-3 py-2">
				  			<div class="form-group">
						    	<label class="small" for="">Category</label>
						    	<select class="form-control form-control-sm" id="">
					              <option>Please Select</option>
					              <option>Data Display</option>
					              <option>Graph</option>
					              <option>Data Input</option>
					              <option>Notification</option>
					              <option>Account</option>
				            	</select>
						  	</div>
						  	<div class="form-group">
							  	<label class="small" for="">Describe your problem here</label>
							  	<textarea class="form-control form-control-sm"></textarea>
							</div>
							<div class="form-group">
							    <label class="small" for="">Attachment</label>
							    <div class="custom-file">
								  <input type="file" class="custom-file-input form-control-sm" id="">
								  <label class="custom-file-label col-form-label-sm" for="">Choose file</label>
								</div>
							</div>
							<hr>
				  			<div class="text-right mb-2"><button class="btn btn-sm btn-primary" data-dismiss="modal">Submit</button></div>
				  		</div>
				  	</div>
			  	</div>
			</div>
    	</div>
  	</div>
</div>

<!-- Modal Sign Out -->
<div class="modal fade mt-5" id="mSignO" data-keyboard="false" tabindex="-1" aria-labelledby="mSignOLabel" aria-hidden="true">
  	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
	      	<div class="modal-body p-3">
  				<div class="font-weight-light text-black-50" style="font-size: 14px;" id="mSignOLabel">Are you sure ?</div>
  				<div>2 Draft need your action</div>
  			</div>
			<div class="modal-footer justify-content-between d-flex py-2">
				<button class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
				<a href="<?=base_url();?>login" class="btn btn-sm btn-outline-danger">Sign Out</a>
			</div>
    	</div>
  	</div>
</div>

<script type="text/javascript">
	// file upload name
	$(".custom-file-input").on("change", function() {
	  var fileName = $(this).val().split("\\").pop();
	  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
	});

	// enable tooltip
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

	// shadow on scroll
	$(".shadow-scroll-container").scroll(function() {     
	    var scroll = $(".shadow-scroll-container").scrollTop();
	    if (scroll > 0) {
	        $(".shadow-scroll-header").addClass("shadow-scroll-active");
	    }
	    else {
	        $(".shadow-scroll-header").removeClass("shadow-scroll-active");
	    }
	});
</script>