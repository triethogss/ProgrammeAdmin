<!-- Add programme for resgistration  -->
<style>
.title
{
	font-weight: bold;
}
.form-control
{
	width: 100%;
}
.table-responsive th
{
	background-color: #cccccc;
}
</style>
<div class="row" style="border-bottom:2px solid #cccccc;">
	<!-- Programme code  -->
	<div class="col-md-4">
		<p style="font-size:18px;font-weight:bold;">PROGRAMME CODE</p>
		<p>123-Pend</p>
	</div>
	<!-- Name of programme -->
	<div class="col-md-4">
		<p  style="font-size:18px;font-weight:bold;">NAME OF PROGRAMME</p>
		<p>Aerobics dance</p>
	</div>
	<!-- Name of provider  -->
	<div class="col-md-4">
		<p  style="font-size:18px;font-weight:bold;">NAME OF PROVIDER</p>
		<p><a href="">Simon Tan</a></p>
	</div>
</div>

	<!-- label additional resource ... -->
	<div><strong>Additional resources and/or accessories:</strong></div>
	<!-- table additional resource -->
	<div class="row">
		<div class="col-md-4">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
			  			<tr>
			  				<th>Item</th>
			  				<th>Unit</th>
			  				<th>Cost</th>
			  				<th>Remarks</th>
			  			</tr>
		  			</thead>
		  			<tr>
		  				<td>Towel</td>
		  				<td>Qty</td>
		  				<td>$3.50</td>
		  				<td>White</td>
		  			</tr>
				</table>
			</div>
		</div>
	</div>
	<div style="border-bottom:2px solid #cccccc;"><strong>Programme Endorsed on 12Jan2014 by</strong> <a href="">Simon Tan</a></div>
	<div><strong>The following information are populated from facility booking where applicable :</strong></div>
	<div>Sessions:</div>
	<!-- table of sessions -->
	<div class="row" style="border-bottom:2px solid #cccccc;">
		<div class="col-md-10">
			<div class="table-responsive">
				<table class="table table-bordered" id="table-sessions">
					<thead>
			  			<tr>
			  				<th>Date</th>
			  				<th>Start time</th>
			  				<th>End time</th>
			  				<th>Sub-venue</th>
			  				<th>Facility booking code</th>
			  				<th>Revenue centre</th>
			  				<th>Action</th>
			  			</tr>
		  			</thead>
		  			<tr>
		  				<td><input type='text' class='form-control tb-ses-row-date'></td>
		  				<td><input type='text' class='form-control tb-ses-row-start-time'></td>
		  				<td><input type='text' class='form-control tb-ses-row-end-time'></td>
		  				<td><input type='text' class='form-control tb-ses-row-sub-venue'></td>
		  				<td><input type='text' class='form-control tb-ses-row-code'></td>
		  				<td><input type='text' class='form-control tb-ses-row-revenue'></td>
		  				<td>			  				
			  				<div style='width:130px;'>
						        <a href=''><button type='button' class='btn btn-default btn-edit-session'><span class='glyphicon glyphicon-pencil'></span></button></a>
								<!-- button delete -->
							    <button type='button' class='btn btn-default btn-del-last-session'><span class='glyphicon glyphicon-trash'></span></button>		  					
								<!-- button add -->
								<button type='button' class='btn btn-success btn-add-session'><span class='glyphicon glyphicon-plus-sign'></span></button>		  					
		  					 </div>
		  				</td>
		  			</tr>
				</table>
			</div>
		</div>
	<!-- 	<div class="col-md-4">
			<div class="row">
			 <button type="button" class="btn btn-primary" style="width:150px;margin:5px;">Edit sessions</button>
			</div>
			<div class="row">
			 <button type="button" class="btn btn-primary" style="width:150px;margin:5px;" id="btn-add-facility">Add Facility Info</button>
			</div>
		</div> -->
	</div>
	<div class="title">Complete the following to add programme for resgistration:</div>
	<!-- Programme Display Name -->
	<form class="form-horizontal" role="form">
		<div class="form-group">
	 		<label class="col-md-3 control-label">Programme Display Name:</label>
	 		<div class="col-md-3">
	 			<input type="text" class="form-control"  >
	 		</div>
 		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				    <label class="col-md-6" style="text-align:right;">Registration Start Date</label>
		            <div class="input-group date datetimepicker startdatetimepicker col-md-5" id="star_time_registration">
		                <input type="text" class="form-control" name="started_at"  readonly="readonly" />
		                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
		        </div>
	    	</div>
	    	<div class="col-md-4">
				<div class="form-group">
				    <label class="col-md-3">End Date</label>
		            <div class="input-group date datetimepicker startdatetimepicker col-md-7" id="end_time_registration">
		                <input type="text" class="form-control" name="started_at"  readonly="readonly" />
		                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
		        </div>
	    	</div>
  		</div>
  		<div class="row">
  			<div class="col-md-10">
  				<div class="form-group">
  					<label class="col-md-6">Reminder to be sent to users who has add this Event to My Favourite</label>
  					<div class="input-group date datetimepicker startdatetimepicker col-md-3" id="event-reminder">
		                <input type="text" class="form-control" name="started_at"  readonly="readonly" />
		                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
  				</div>
  			</div>
  		</div>
  		<!-- List Activity Leader/Instructor -->
	 	<div class="form-group">
	 		<label class="col-md-3 control-label">List Activity Leader/Instructor:</label>
	 		<div class="col-md-5">
	 			<div class="table-responsive">
	 				<table class="table table-bordered table-striped" id="table-activiy-leader">
	 					<thead>
	 						<tr>
	 							<th>Name</th>
	 							<th>Accreditation</th>
	 							<th>Action</th>
	 						</tr>
	 					</thead>
	 					<tr>	 					
	 						<td><input type='text' class='form-control leader-name' value="Micheal Tan" disabled></td>
	 						<td><input type='text' class='form-control accreditation' value="NSYS/NROC" disabled></td>
	 						<td>
	 							<div class="row" style="margin:0px;">
		 							<button type='button' class='btn btn-default btn-edit-leader' id='1'><span id="icon-edit" class='glyphicon glyphicon-pencil'></span></button>
		 							<button type='button' class='btn btn-default btn-del-leader'><span class='glyphicon glyphicon-trash'></span></button>	 							
	 							</div>	 							
	 						</td>
	 					</tr>
	 					<tr>
	 						<td><input type='text' class='form-control leader-name' value="Angel Lim"  disabled></td>
	 						<td><input type='text' class='form-control accreditation' value="NROC"  disabled></td>
	 						<td>
	 							<div class="row" style="margin:0px;">
		 							<button type='button' class='btn btn-default btn-edit-leader' id='1'><span class='glyphicon glyphicon-pencil'></span></button>
		 							<button type='button' class='btn btn-default  '><span class='glyphicon glyphicon-trash'></span></button>	 							
	 							</div>
	 						</td>
	 					</tr>
	 				</table>
	 			</div>
	 		</div>
	 		<div class="col-md-1">
	 			<button type="button" class="btn btn-success btn-add-leader"><span class="glyphicon glyphicon-plus-sign"></span></button>
	 		</div>
	 	</div>
	 	<!-- No. allowabled on Wait list -->
	 	<div class="form-group">
	 		<label class="col-md-3 control-label">No. allowabled on Waiting list</label>
	 		<div class="col-md-1">
	 			<input type="number" class="form-control" id="numberwaiting" min="0" value="0">
	 		</div>
	 	</div>
	 	<!-- No. of response day for payment -->
	 	<div class="row">
	 		<div class="col-md-4">
	 			<div class="form-group">
			 		<label class="col-md-9 control-label">No. of response day for payment</label>
			 		<div class="col-md-3">
			 			<input type="number" class="form-control" id="numberdayforpayment" min="0" value="0">
			 		</div>
			 	</div>
	 		</div>
	 		<div class="col-md-6">
			    <div class="form-group">
			 		<label class="col-md-6 control-label">Reminder for payment (no. of day before payment due)</label>
			 		<div class="col-md-2">
			 			<input type="number" class="form-control" id="numberremider" min="0" value="0">
			 		</div>
			 	</div>
	 		</div>	 	
	    </div>
	    <div class="form-group">
	    	<label class="col-md-3 control-label">Minimum class size not met:</label>
	    </div>
	    <!-- release of facility -->
	    <div class="row">
	    	<div class="form-group">
		    	<label class="col-md-3 control-label">Release of facility</label>	    	
		    	<div class="col-md-1">		
				    <label class="radio-inline">
				      <input type="radio" name="isendorse">Yes 
				    </label>	  
			    </div>
			    <div class="col-md-1">		    	
				    <label  class="radio-inline">
				      <input type="radio" name="isendorse">No
				    </label>	  	
			  	</div>
		  </div>
	    </div>
	    <!-- 1st/ 2nd remider  -->
	 	<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				    <label class="col-md-6" style="text-align:right;">1st Reminder</label>
		            <div class="input-group date datetimepicker startdatetimepicker col-md-5" id="first_reminder">
		                <input type="text" class="form-control" name="started_at" readonly="readonly" />
		                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
		        </div>
	    	</div>
	    	<div class="col-md-4">
				<div class="form-group">
				    <label class="col-md-3">2nd Reminder</label>
		            <div class="input-group date datetimepicker startdatetimepicker col-md-7" id="second_reminder">
		                <input type="text" class="form-control" name="started_at"  readonly="readonly" />
		                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
		        </div>
	    	</div>
  		</div>
	    <!-- To notify  -->
	    <div class="row">
	    	<label class="col-md-3 control-label">To notify : </label>
	    	<div class='col-md-7'>
	    		<!-- row check me -->
	    		<div class="row">
					<label class="col-md-4">
				      <input type="checkbox"> Provider
				    </label>  
				    <label class="col-md-6">
				      <input type="checkbox">Activity Leader/Instructor
				    </label> 	
	    		</div>
	    		<!-- row CM, ACM, Zone Planning Team -->
	    		<div class="row">
					<label class="col-md-2">
				      <input type="checkbox"> CM
				    </label>  	
				    <label class="col-md-2">
				      <input type="checkbox"> ACM
				    </label>  
				    <label class="col-md-6">
				      <input type="checkbox"> Zone Planning Team
				    </label>
	    		</div>
	    		<!-- row Others -->
	    		<div class="row">
					<label class="col-md-2">
				      <input type="checkbox"> Others
				    </label>
				    <div class='col-md-10'>
				    	<div class="row">	
					    	<label class='col-md-5'><input type='text' class='form-control input-other' ></label>
					    	<button type='button' class='btn btn-success btn-add-other'><span class='glyphicon glyphicon-plus-sign'></span></button>
					    	<button type='button' class='btn btn-default btn-del-last-other'><span class='glyphicon glyphicon-trash'></span></button>				    	
					    </div>
					</div>				 
	    		</div>
	    	</div>
	    </div>
	    <!-- Message -->
	    <div class="row" style="margin-bottom:10px;">
	    	<label class="col-md-3 control-label">Message :</label>
	    	<div class="col-md-6">
	    		<textarea class="form-control" rows="4">
	    			Please note, Aerobic Dance Prograame (123 Endorsed) has not meet it's minimum class size!
	    		</textarea>
	    	</div>
	    </div>
	    <!-- Old version -->
	    <!-- Programme Fee -->
	 <!--    <div class="row">
	    	<label class="col-md-3 control-label">Programme Fee:</label>
	    	<div class="col-md-5">
	    		<div class="table-responsive">
		    		<table class="table table-bordered">
		    			<thead>
			    			<tr>
			    				<th >Audience Type</th>
			    				<th >Rate</th>
			    			</tr>
		    			</thead>
		    			<tr>
		    				<td id="td-select-audience-type">
		    					<select class='form-control' id='select-audience-type'>
		    						<option></option>
		    						<option>Item 1</option>
		    						<option>Item 2</option>
		    					</select>
		    				</td>
		    				<td id="td-select-rate">	    					
			    				<select class='form-control' id='select-rate'>
		    						<option>0.00</option>
		    						<option>0.15</option>
		    						<option>0.20</option>
			    				</select> 		    					
						    </td>
		    				<td style='width:110px;text-align:center;'>
		    					<button type='button' class='btn btn-success btn-add-row-tb-programme-fee'><span class='glyphicon glyphicon-plus-sign'></span></button>
						    	<button type='button' class='btn btn-default btn-del-last-row-tb-prog-fee'><span class='glyphicon glyphicon-trash'></span></button> 
		    				</td>
		    			</tr>
		    		</table>
	    		</div>
	    	</div>
	    </div> -->	    
	    <!-- Declaration  -->
	  	<div class="row">
	    	<label class="col-md-3 control-label">Declaration:</label>
	    	<div class='col-md-9'>
	    		<div class='row'>
	    		    <div id='select-declaration-container'>	
			 			<label class='col-md-3' id='select-declaration'>
			 				<select class='form-control'>
			 					<option>Declaration 1</option>
			 					<option>Declaration 2</option>
			 				</select>
			 			</label>
		 			</div>
		 			<button type='button' class='btn btn-success btn-add-declaration'><span class='glyphicon glyphicon-plus-sign'></span></button>
			    	<button type='button' class='btn btn-default btn-del-last-declaration'><span class='glyphicon glyphicon-trash'></span></button>
		    	</div>		 
	 		</div>
	    </div>		
	    <!-- Certificate Type -->
	    <div class="row">
	    	<label class="col-md-3 control-label">Certificate Type:</label>
	    	<div class='col-md-9'>
	    		<div class='row'>	
	    			<div id='select-certificate-container'>
			 			<label class="col-md-3" id="select-certificate">
			 				<select class="form-control">
			 					<option>Item 1</option>
			 					<option>Item 2</option>
			 				</select>
			 			</label>
			 		</div>
		 			<button type="button" class="btn btn-success btn-add-certificate"><span class="glyphicon glyphicon-plus-sign"></span></button>
			    	<button type="button" class="btn btn-default btn-del-last-certificate"><span class="glyphicon glyphicon-trash"></span></button>
		    	</div>		 
	 		</div>
	    </div>	
	    <!-- Tag Word  -->
	  	<div class="row">
	    	<label class="col-md-3 control-label">Tag Word:</label>
	    	<div class='col-md-9'>
	    		<div class='row'>
	    		    <div id='select-tag-word-container'>	
			 			<label class='col-md-3' id='select-tag-word'>
			 				<select class='form-control'>
			 					<option>Declaration 1</option>
			 					<option>Declaration 2</option>
			 				</select>
			 			</label>
		 			</div>
		 			<button type='button' class='btn btn-success btn-add-tag-word'><span class='glyphicon glyphicon-plus-sign'></span></button>
			    	<button type='button' class='btn btn-default btn-del-last-tag-word'><span class='glyphicon glyphicon-trash'></span></button>
		    	</div>		 
	 		</div>
	    </div>		
	    <!-- Discount Scheme -->
	    <div class="row">
	    	<label class="col-md-3 control-label">Discount Scheme:</label>
	    	<div class='col-md-9'>
	    		<div class='row'>	
	    			<div id='select-scheme-container'>
			 			<label class="col-md-3" id="select-discount-scheme">
			 				<select class="form-control">
			 					<option>Item 1</option>
			 					<option>Item 2</option>
			 				</select>
			 			</label>
			 		</div>
		 			<button type="button" class="btn btn-success btn-add-scheme"><span class="glyphicon glyphicon-plus-sign"></span></button>
			    	<button type="button" class="btn btn-default btn-del-last-scheme"><span class="glyphicon glyphicon-trash"></span></button>
		    	</div>		 
	 		</div>
	    </div>	
	       <!-- checkbox member, non-member, all user -->
		 <div style="margin:auto;width:620px;background-color:#b0e0e6;">
		 	<label class="col-md-4">
		 		<input type="radio" name="user">For Member only 
		 	</label>
		 	<label class="col-md-4">
		 		<input type="radio" name="user">For Non-member only
		 	</label>
		 	<label class="col-md-4">
		 		<input type="radio" name="user">For all users
		 	</label>
		 </div>
	    <!-- checkbox not public and public booking -->
		 <div style="margin:auto;width:480px;background-color:#b0e0e6;">
		 	<label class="col-md-6">
		 		<input type="radio" name="public">Not for Public Booking 
		 	</label>
		 	<label class="col-md-6">
		 		<input type="radio" name="public">Open for public Booking
		 	</label>
		 </div>
 		<!-- To remove from public display .. -->
		 <div style="margin:auto;width:460px;">			 
		 	 <label class="col-md-12"> 
		 		<input type="checkbox" name="group">To remove from public display upon Registration End Date	 	
		 	</label> 
		 </div>


		 <!-- checkbox individual and group -->
		 <div style="margin:auto;width:480px;">	
		 	<label class="col-md-6">	 	
		 		<input type="radio" name="group">For individual registration 
		 	</label>
		 	<label class="col-md-6">
		 		<input type="radio" name="group">For group registration		 	
		 	</label>
		 </div>
		 <!-- button add programme for registration -->
		<div style="width:320px; margin-left:auto;margin-right:auto;">
			<a href="<?php echo site_url('programme/availableForRegistration');?>"><button type="button" class="btn btn-primary">Add programme for Registration</button></a>
			<a href="<?php echo site_url('programme/endorsementendorsed');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
		</div>
 </form>




 <!-- Dialog Confirm when delete session->
<!-- Modal -->
<div class="modal fade" data-backdrop="static" id="dialog-confirm-del-session" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Do you want to delete?
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" id="del-session-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="del-session-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Dialog Confirm when delete leader->
<!-- Modal -->
<div class="modal fade" data-backdrop="static"  id="dialog-confirm-del-leader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Do you want to delete ?
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" id="del-leader-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="del-leader-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Dialog Confirm when delete other->
<!-- Modal -->
<div class="modal fade" data-backdrop="static"  id="dialog-confirm-del-other" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Do you want to delete ?
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" id="del-other-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="del-other-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
