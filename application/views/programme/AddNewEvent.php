<!-- Add New Event -->
<style type="text/css">
.form-control
{
	width: 100%;
}
.table-responsive th
{
	background-color: #cccccc;
}
	
</style>
<form class="form-horizontal" role="form">
	<!-- Name of provider -->
	<div class="row">
	  <div class="col-md-6">
	  	<div class="form-group">
		    <label for="txtNameofProvider" class="col-sm-4 control-label">Name of provider</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="txtNameofProvider" placeholder="Name of provider">
		    </div>
	  	</div>
	  </div>
	  <div class="col-md-6">
	  	<div class="form-group">
		    <label for="txtProgrammeName" class="col-sm-4 control-label">Name of Event</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="txtProgrammeName" placeholder="Name of Event">
		    </div>
	  	</div>
	  </div>
	</div>
	<!-- Event category -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Event category</label>
			    <div class="col-sm-6">
					<select class="form-control">					 
					  	<?php                   
                     		 foreach ($programme as $key)
                         	 echo "<option>".$key["name"]."</option>";
                    	?>				 
					</select>
			    </div>
			    <!-- <div class="col-sm-1"><button type="button" class="btn btn-danger"><img src="../../assets/images/icon_minus.png" alt="Edit" class="img-rounded" width='20px' height='20px' ></button></div> -->
	 		 </div>
		</div>	
	</div>
	<!-- Activity-->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Activity</label>
			    <div class="col-sm-6">
					<select class="form-control" id="select-activity">
					  <?php                   
                     		 foreach ($activity as $key)
                         	 echo "<option>".$key["name"]."</option>";
                    	?>				 
					</select>
			    </div>
			    <!-- <div class="col-sm-1"><button type="button" class="btn btn-danger"><img src="../../assets/images/icon_minus.png" alt="Edit" class="img-rounded" width='20px' height='20px' ></button></div> -->
	 		 </div>
		</div>
		<div class='col-md-6'>
			<div class="form-group">
				<label class="col-md-4" id="sport-category">Sport Category Level 1: -</label>
	 		 </div>
		</div> 
	</div>
	<!-- Activity type -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-sm-4 control-label" id="activity-type" >Activity type-</label>
			</div>
		</div>
		<div class='col-md-6'>
			<div class="form-group">
				<label class="col-md-4" id="sport-type">Sport Category Level 2: -</label>
			</div>
		</div>
	</div>	
	<!-- Sport Category Level 3 -->
	<div class="row">
		<div class="col-md-6">			
		</div>
		<div class='col-md-6'>
			<div class="form-group">
				<label class="col-md-4" id="sport-type">Sport Category Level 3: -</label>
			</div>
		</div>
	</div>	
	<!-- Overall objective of programme -->
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
			     <label for="txtObjectiveofProgramme" class="col-md-4 control-label">Overall Objective of Event</label>
		   		 <div class="col-md-8">
		      		<!-- <input type="text" class="form-control" id="txtObjectiveofProgramme" > -->
		      		<textarea class="form-control" row="4"></textarea>
		    	</div>
		  	</div>
	  	</div>
	</div>
	<!-- Event Description -->
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
			     <label for="txtActivityDescription" class="col-md-4 control-label">Event Description</label>
		   		 <div class="col-md-8">
		      		<!-- <input type="text" class="form-control" id="txtActivityDescription" > -->
		      		<textarea class="form-control" row="4"></textarea>
		    	</div>
		  	</div>
	  	</div>
	</div>
	<!-- Event Short Description -->
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
			     <label for="txtActivityDescription" class="col-md-4 control-label">Event  Short Description</label>
		   		 <div class="col-md-8">
		      		<input type="text" class="form-control" id="txtActivityDescription" >
		      		<!-- <textarea class="form-control" row="4"></textarea> -->
		    	</div>
		  	</div>
	  	</div>
	</div>
	<!-- Event URL -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Event URL</label>
			    <div class="col-sm-6">
					<input type="text" class="form-control" >
			    </div>
			    <!-- <div class="col-sm-1"><button type="button" class="btn btn-danger"><img src="../../assets/images/icon_minus.png" alt="Edit" class="img-rounded" width='20px' height='20px' ></button></div> -->
	 		 </div>
		</div>	
	</div>
	<!-- No of session -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			     <label for="numberofSesion" class="col-md-4 control-label">No of sesion</label>
		   		 <div class="col-md-2">
		      		<input type="number" class="form-control" id="numberofSesion" min="0" value="0">
		    	</div>
		  	</div>
	  	</div>	
	  	<div class="col-md-6">
	  		<div class="form-group">
			    <label for="durationofsesion" class="col-md-4 control-label">Duration of each session</label>
		   		<!--  <div class="col-md-2">
		      		<input type="number" class="form-control" id="durationofsessionhour" min="0" max="23" >
		    	</div>		    	
		    	<div class="col-md-2">
		      		<input type="number" class="form-control" id="durationofsessionminute" min="0" max="59">
		    	</div> -->
	    	 	<div class="input-group date datetimepicker startdatetimepicker col-md-3" id="duration-of-session">
	                <input type="text" class="form-control" name="started_at"  readonly="readonly" />
	                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
	                </span>
	            </div>
		  	</div>
	  	</div>
	</div>
	<!-- No of session -->
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
			     <label for="numberofSesion" class="col-md-8 control-label">Description of each session</label>
		   	</div>
	  	</div>
	</div>
	<!-- Description of each sesion -->
	<div class="row">
			<div class="col-md-2"></div>	
			<div class="col-md-6">
				<!-- table session -->
				<div class="table-responsive">
					<table class="table table-bordered table-striped" id="table-session">
						<thead>
							<tr>
								<th>Session</th>
								<th colspan="2">Discription</th>
							</tr>	
						</thead>
						<tr>
							<td><input type="text" class="form-control row-session" ></td>
							<td><input type="text" class="form-control row-description"></td>
							<td><button type="button" class="form-control button-delete-session"><span class="glyphicon glyphicon-trash"></span></button></td>
						</tr>
					</table>
				</div>
			</div>
			<!-- button add  session -->
			<div class="col-md-3">
				<button type="button" class="btn btn-success" id="btn-add-sessions"><span class="glyphicon glyphicon-plus-sign"></span></button>
			</div>	
	</div>
	<!-- Target Audience -->
	<div id="target-audience-container">
		<div class="row" id="target-audience">
			<div class="col-md-6">
				<div class="form-group">
					<!-- label activity type -->
				    <label class="col-md-4 control-label">Target Audience</label>
				    <!-- select activity type -->
				    <div class="col-md-6">
						<select class="form-control" style="width:100%;" id="select-target-audience">
							  <?php                   
	                     		 foreach ($target_audience as $key)
	                         	 echo "<option>".$key["name"]."</option>";
                    			?>					 
						</select>
				    </div>
				    <!-- button (-) -->
				    <div class="col-md-1"><button type="button" class="btn btn-success btn-add-target-audience"><span class="glyphicon glyphicon-plus-sign"></span></button></div>
				    <div class="col-md-1"><button type="button" class="btn btn-default del-last-target-audience"><span class="glyphicon glyphicon-trash"></span></button></div>
		 		 </div>
			</div>
		</div>
	</div>
	<!-- Venue requirement -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			     <label for="txtVenueRequirement" class="col-md-4 control-label">Venue Requirement</label>
		   		 <div class="col-md-8">
		      		<input type="text" class="form-control" id="txtVenueRequirement" >
		    	</div>
		  	</div>
	  	</div>
	</div>
	<!-- Equipment requirement -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			     <label for="txtEquipmentRequirement" class="col-md-4 control-label">Equipment requirement</label>
		   		 <div class="col-md-8">
		      		<input type="text" class="form-control" id="txtEquipmentRequirement" >
		    	</div>
		  	</div>
	  	</div>
	</div>
	<!-- Maximum group size per session-->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			     <label for="maximumGroupSize" class="col-md-4 control-label">Maximum group size per session</label>
		   		 <div class="col-md-2">
		      		<input type="number" class="form-control" id="maximumGroupSize" min="0" value="0">
		    	</div>
		  	</div>
	  	</div>	  	
	</div>
	<!-- Minimum number to start -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<!-- Label cost per programme ...  -->
			     <label for="minimumNumbertoStart" class="col-md-4 control-label"> Minimum number to start</label>
		   		 <!-- button for change value -->
		   		 <div class="col-md-2">
		      		<input type="number" class="form-control" id="minimumNumbertoStart" min="0" value="0">
		    	</div>
		  	</div>
	  	</div>	  	
	</div>
	<!-- Programme Fee Per Pax / Programme/League Fee -->
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">	
		  	<label class="col-md-6">
		  		<input type="radio" name="programme-fee" checked>Event Cost Per Pax		  		
		  	</label>
		  	<label class="col-md-6">
		  		<input type="radio" name="programme-fee">Event Cost		  		
		  	</label>		
	  	</div>	  	
	</div>
	<!-- Cost per Pax -->
	<div class="row">	
			<!-- <label class="col-md-3 control-label">Cost per Pax</label> -->
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<!-- table fee per pax -->
				<div class="table-responsive">
					<table class="table table-bordered table-strpied" id="table-cost-per-pax">
						<thead>
							<tr>
								<th>Group</th>
								<th>Fee</th>
								<th style="width:150px;">Revenue Model</th>
								<th>No. of Participant</th>
								<th>Provider</th>
								<th style="width:70px;">SSC</th>
								<th>Remarks</th>
							</tr>
						</thead>					
						<tr>
							<td><input type='text' class='form-control row-group-tb-cost' ></td>
							<td><input type='number' min='0' value='0' class='form-control row-fee-tb-cost' ></td>
							<td>
								<select class='form-control'>
									<option>By Amount</option>
									<option>By Percent</option>
								</select>
							</td>
							<td><input type='number'  min='0' value='0' class='form-control row-cost-tb-cost' ></td>
							<td><input type='number'  min='0' value='0' class='form-control row-cost-tb-cost' ></td>
							<td></td>
							<td></td>							
							<td style='width:110px;text-align:center;'>
		    					<button type='button' class='btn btn-success btn-add-cost'><span class='glyphicon glyphicon-plus-sign'></span></button>
						    	<button type='button' class='btn btn-default btn-del-last-cost'><span class='glyphicon glyphicon-trash'></span></button> 
		    				</td>					
						</tr>
					</table>
				</div>
			</div>
			<!-- button add  cost -->
			<!-- <div class="col-md-2">
				<button type="button" class="btn btn-success" id='btn-add-cost'>Add cost</button>
			</div> -->

	</div>
	<!-- Cost per Programme/League -->
   <!-- 	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			Label cost per programme ...  
			     <label for="costPerProgramme" class="col-md-4 control-label">Cost per Programme/League</label>
		   		 <!-- button for change value 
		   		 <div class="col-md-2">
		      		<input type="number" class="form-control" id="costPerProgramme" min="0" value="0">
		    	</div>
		  	</div>
	  	</div>	  	
	</div> -->
	<!-- Minimum age of participants -->
	<div class="row">
		<!-- Minimum age of participants -->
		<div class="col-md-4">
			<div class="form-group">
				<!-- Label cost per programme ...  -->
			     <label for="minimumAge" class="col-md-6 control-label">Minimum age of participants </label>
		   		 <!-- button for change value -->
		   		 <div class="col-md-3">
		      		<input type="number" class="form-control" id="minimumAge" min="0" value="0">
		    	</div>
		  	</div>
	  	</div>
	  	<!-- Maximum age of participants -->
	  	<div class="col-md-4">
			<div class="form-group">
				<!-- Label cost per programme ...  -->
			     <label for="maximumAge" class="col-md-8 control-label">Maximum age of participants</label>
		   		 <!-- button for change value -->
		   		 <div class="col-md-3">
		      		<input type="number" class="form-control" id="maximumAge" min="0" value="0">
		    	</div>
		  	</div>
	  	</div>	  		  	
	</div>
	<!-- Participant gender -->		
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Participant gender</label>
			    <div class="col-sm-3">
					<select class="form-control">
						<option>N/A</option>									 
					  	<option>Male</option>
						<option>Female</option>										 
					</select>
			    </div>			    
	 		 </div>
		</div>
	</div>	
	<!-- Attach Photo -->		
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Attach Photo</label>
			    <div class="col-sm-3">					
					<input type="file" id="fileAttachPhoto">
				</div>							    
	 		</div>
		</div>
	</div>
		<!-- Contact person for enquiry -->
	<div class="row">
	  <div class="col-md-6">
	  	<div class="form-group">
		    <label for="txtContactPerson" class="col-sm-4 control-label">Contact person for Enquiry</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="txtContactPerson">
		    </div>
	  	</div>
	  </div>
	</div>
	<!-- Mobile/ Pager -->
	<div class="row">
	  <div class="col-md-6">
	  	<div class="form-group">
		    <label for="txtMobile" class="col-sm-4 control-label">Mobile/Pager</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="txtMobile" >
		    </div>
	  	</div>
	  </div>
	  <!-- Office -->
	  <div class="col-md-6">
	  	<div class="form-group">
		    <label for="txtOffice" class="col-sm-4 control-label">Office</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="txtOffice" >
		    </div>
	  	</div>
	  </div>
	</div>
	<!-- Fax -->
	<div class="row">
	  <div class="col-md-6">
	  	<div class="form-group">
		    <label for="txtFax" class="col-sm-4 control-label">Fax</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="txtFax">
		    </div>
	  	</div>
	  </div>
	</div>
	<!-- Email -->
	<div class="row">
	  <div class="col-md-6">
	  	<div class="form-group">
		    <label for="txtEmail" class="col-sm-4 control-label">Email</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="txtEmail" >
		    </div>
	  	</div>
	  </div>
	  <!-- Website -->
	  <div class="col-md-6">
	  	<div class="form-group">
		    <label for="txtWebsite" class="col-sm-4 control-label">Website</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="txtWebsite" >
		    </div>
	  	</div>
	  </div>
	</div>	
	<!-- Additional resource -->
	<div class="row" style="border-bottom:2px solid #cccccc;margin-bottom:5px;">
		<div class="form-group">
			<label class="col-md-3 control-label">Additional resources and/or merchandises</label>
			<div class="col-md-6">
				<!-- Table Additional resource -->
				<div class="table-responsive">
					<table class="table table-bordered table-striped" id="table-additional-resources">
						<thead>
							<tr>
								<th >Item</th>
								<th >Unit</th>
								<th >Cost</th>
								<th  colspan='2'>Remarks</th>
							</tr>
						</thead>					
						<tr>
							<td><input type='text' class='form-control row-item-tb-res' ></td>
							<td><input type='text' class='form-control row-unit-tb-res' ></td>
							<td><input type='text' class='form-control row-cost-tb-res' ></td>
							<td><input type='text' class='form-control row-remark-tb-res' ></td>
							<td><button type='button' class='form-control btn-del-additional-resources'><span class='glyphicon glyphicon-trash'></span></td>						
						</tr>

					</table>
				</div>
			</div>
			<!-- button add item -->
			<div class="col-md-3">
				<button type="button" class="btn btn-success" id="btn-add-additional-resources"><span class="glyphicon glyphicon-plus-sign"></span></button>
			</div>
		</div>
	</div>
	<!-- ==================================================================================================== -->
	<div><strong>The following information are populated from facility booking where applicable :</strong></div>
	<div><strong>Sessions:</strong></div>
	<!-- table of sessions -->
	<div class="row" style="border-bottom:2px solid #cccccc;margin-bottom:10px;">
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
	</div><!-- end table session -->
	<!-- ========================================================================================================================================= -->
	<!-- Event Display Name -->
	<form class="form-horizontal" role="form">
		<div class="form-group">
	 		<label class="col-md-3 control-label">Event Display Name:</label>
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
  		<!-- Reminder to be sent to users ... -->
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
  		<!-- Minimum class size not met -->
	    <div class="form-group">
	    	<label class="col-md-3 control-label">Minimum class size not met:</label>
	    </div>
	    <!-- Release of facility -->
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
				   <!--  <label class="col-md-6">
				      <input type="checkbox">Activity Leader/Instructor
				    </label>  -->	
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
			<a href="<?php echo site_url('programme/availableForRegistration');?>"><button type="button" class="btn btn-primary">Add Event for Registration</button></a>
			<a href="<?php echo site_url('programme/endorsementendorsed');?>"><button type="button" class="btn btn-primary">Cancel</button></a>
		</div>
</form>







<!-- Dialog Confirm when delete session-->
<!-- Modal -->
<div class="modal fade" id="dialog-confirm-del-session" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
      	<button type="button" class="btn btn-primary" id="del-session-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="del-session-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Dialog Confirm when delete fee per pax-->
<!-- Modal -->
<div class="modal fade" data-backdrop="static"  id="dialog-confirm-del-fee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
      	<button type="button" class="btn btn-primary" id="del-fee-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="del-fee-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Dialog Confirm when delete cost per pax-->
<!-- Modal -->
<div class="modal fade" data-backdrop="static"  id="dialog-confirm-del-add-res" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Do you want to delete  ?
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" id="del-resources-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="del-resources-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal

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
</div><!-- /.modal