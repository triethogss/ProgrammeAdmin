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
		<p  style="font-size:18px;font-weight:bold;">PROGRAMME ENDORSED BY</p>
		<p><a href="">Simon Tan</a></p>
	</div>
</div>

	<!-- label additional resource ... -->
	<div class="title">Additional resources and/or accessories:</div>
	<!-- table additional resource -->
	<div class="row">
		<div class="col-md-4">
			<table class="table table-bordered">
	  			<tr>
	  				<td>Item</td>
	  				<td>Unit</td>
	  				<td>Cost</td>
	  				<td>Remarks</td>
	  			</tr>
	  			<tr>
	  				<td>Towel</td>
	  				<td>Qty</td>
	  				<td>$3.50</td>
	  				<td>White</td>
	  			</tr>
			</table>
		</div>
	</div>
	<div class="title">The following information are populated from facility booking where applicable :</div>
	<div>Sessions:</div>
	<!-- table of sessions -->
	<div class="row">
		<div class="col-md-8">
			<table class="table table-bordered">
	  			<tr>
	  				<td>Date</td>
	  				<td>Start time</td>
	  				<td>End time</td>
	  				<td>Sub-venue</td>
	  				<td>Facility booking code</td>
	  				<td>Revenue centre</td>
	  			</tr>
	  			<tr>
	  				<td><input type="text" class="form-control"></td>
	  				<td><input type="text" class="form-control"></td>
	  				<td><input type="text" class="form-control"></td>
	  				<td><input type="text" class="form-control"></td>
	  				<td><input type="text" class="form-control"></td>
	  				<td><input type="text" class="form-control"></td>
	  			</tr>
			</table>
		</div>

		<div class="col-md-4">
			<div class="row">
			 <button type="button" class="btn btn-primary" style="width:150px;margin:5px;">Add Facility Info</button>
			</div>
			<div class="row">
			 <button type="button" class="btn btn-primary" style="width:150px;margin:5px;">Edit sessions</button>
			</div>
		</div>
	</div>
	<div class="title">Complete the following to add programme for resgistration:</div>
	<!-- Registration start date -->
	<form class="form-horizontal" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				    <label class="col-md-6" style="text-align:right;">Registration Start Date</label>
		            <div class="input-group date datetimepicker startdatetimepicker col-md-5" id="star_time_registration">
		                <input type="text" class="form-control" name="started_at" data-format="DD/MMYYYY/HH/MM" readonly="readonly" />
		                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
		        </div>
	    	</div>
	    	<div class="col-md-4">
				<div class="form-group">
				    <label class="col-md-3">End Date</label>
		            <div class="input-group date datetimepicker startdatetimepicker col-md-7" id="end_time_registration">
		                <input type="text" class="form-control" name="started_at" data-format="DD/MMYYYY/HH/MM" readonly="readonly" />
		                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
		        </div>
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
	 		<div class="col-md-6">
	 			<div class="form-group">
			 		<label class="col-md-6 control-label">No. of response day for payment</label>
			 		<div class="col-md-4">
			 			<input type="number" class="form-control" id="numberdayforpayment" min="0" value="0">
			 		</div>
			 	</div>
	 		</div>
	 		<div class="col-md-6">
			    <div class="form-group">
			 		<label class="col-md-6 control-label">Reminder for payment (no. of day before payment due)</label>
			 		<div class="col-md-4">
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
	    <!-- 1st/ 2nd remider  -->
	 	<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				    <label class="col-md-6" style="text-align:right;">1st Reminder</label>
		            <div class="input-group date datetimepicker startdatetimepicker col-md-5" id="first_reminder">
		                <input type="text" class="form-control" name="started_at" data-format="DD/MM/YYYY/HH/MM" readonly="readonly" />
		                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
		                </span>
		            </div>
		        </div>
	    	</div>
	    	<div class="col-md-4">
				<div class="form-group">
				    <label class="col-md-3">2nd Reminder</label>
		            <div class="input-group date datetimepicker startdatetimepicker col-md-7" id="second_reminder">
		                <input type="text" class="form-control" name="started_at" data-format="DD/MM/YYYY/HH/MM" readonly="readonly" />
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
				      <input type="checkbox"> Check me out
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
					    	<label class='col-md-5'><input type='text' class='form-control'></label>
					    	<button type='button' class='btn btn-success btn-add-other'><span class='glyphicon glyphicon-plus-sign'></span></button>
					    	<button type='button' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span></button>				    	
					    </div>
					</div>				 
	    		</div>
	    	</div>
	    </div>
	    <!-- Message -->
	    <div class="row" style="margin-bottom:10px;">
	    	<label class="col-md-3 control-label">Message :</label>
	    	<div class="col-md-6"><textarea class="form-control" rows="4"></textarea></div>
	    </div>
	    <!-- Programme Fee -->
	    <div class="row">
	    	<label class="col-md-3 control-label">Programme Fee:</label>
	    	<div class="col-md-5">
	    		<table class="table table-bordered">
	    			<tr>
	    				<th >Audience Type</th>
	    				<th >Rate</th>
	    			</tr>
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
					    	<button type='button' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span></button> 
	    				</td>
	    			</tr>
	    		</table>
	    	</div>
	    </div>	    
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
			    	<button type='button' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span></button>
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
			    	<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
		    	</div>		 
	 		</div>
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

