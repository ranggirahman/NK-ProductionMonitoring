
</body>
</html>

<!-- Modal Help -->
<div class="modal fade mt-5" id="mHelp" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="mHelpLabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header bg-white py-2">
        		<h5 class="modal-title font-weight-light" style="font-size: 16px;" id="mHelpLabel">Help</h5>
       			<i class="material-icons text-muted cur-pointer my-auto" data-dismiss="modal">close</i>
      		</div>
	      	<div class="modal-body p-2">
  				<div class="border rounded justify-content-between d-flex text-muted mb-2 p-2">
  					<div class="d-flex">
				  		<i class="material-icons mr-3 ml-2 my-auto" style="opacity: 0.5; font-size: 2rem;">insert_drive_file</i>
				  		<div>
				  			<div class="small mb-n1">Download</div>
				  			<div class="font-weight-light text-dark" style="font-size: 1.1rem;">User Guide</div>
				  		</div>
				  	</div>
				  	<div class="my-auto">
				  		<a href="" class="text-muted"><i class="material-icons mx-2">get_app</i></a>
				  	</div>
			  	</div>
			  	<div class="card">
			  		<div class="card-body justify-content-between d-flex text-muted bg-white cur-pointer cur-noselect p-2" data-toggle="collapse" href="#cProblemR">
			  			<div class="d-flex">
					  		<i class="material-icons mr-3 ml-2 my-auto" style="opacity: 0.5; font-size: 2rem;">contact_support</i>
					  		<div>
					  			<div class="small mb-n1">Need Assistance ?</div>
					  			<div class="font-weight-light text-dark" style="font-size: 1.1rem;">Report a Problem</div>
					  		</div>
					  	</div>
					  	<div class="my-auto">
					  		<i class="material-icons mx-2" id="colIndicator">expand_more</i>
					  	</div>
			  		</div>
			  		<div class="collapse" id="cProblemR">
				  		<div class="card-body px-3 py-2">
				  			<div class="form-group">
						    	<label class="small" for="">Category</label>
						    	<select class="form-control" id="">
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
							  	<textarea class="form-control"></textarea>
							</div>
							<div class="form-group">
							    <label class="small" for="">Attachment</label>
							    <div class="custom-file">
								  <input type="file" class="custom-file-input" id="">
								  <label class="custom-file-label" for="">Choose file</label>
								</div>
							</div>
				  			<div class="text-right"><button class="btn btn-primary" data-dismiss="modal">Submit</button></div>
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
				<a href="<?=base_url();?>login" class="btn btn-sm btn-outline-danger"><i class="material-icons mr-2" style="font-size: 18px;">exit_to_app</i>Sign Out</a>
			</div>
    	</div>
  	</div>
</div>

<script type="text/javascript">
	// collapse report problem


	// enable tooltip
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
</script>