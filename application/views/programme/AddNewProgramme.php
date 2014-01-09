<!-- <h2>Add new programme</h2> -->
<style type="text/css">
.form-control
{
	width: 100%;
}
	
</style>
<div style="border-bottom:2px solid #cccccc;margin-bottom:10px;">
	<div style="font-size:18px;">PROGRAMME CODE</div>
	<div>123-Pend</div>
</div>
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
		    <label for="txtProgrammeName" class="col-sm-4 control-label">Name of programme</label>
		    <div class="col-sm-8">
		      <input type="text" class="form-control" id="txtProgrammeName" placeholder="Name of programme">
		    </div>
	  	</div>
	  </div>
	</div>
	<!-- Programme name category -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Programme category</label>
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
					<select class="form-control">
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
				<label class="col-md-4">Sport Category -</label>
	 		 </div>
		</div> 
	</div>
	<!-- Activity type -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-sm-4 control-label" >Activity type-</label>
			</div>
		</div>
		<div class='col-md-6'>
			<div class="form-group">
				<label class="col-md-4">Sport type-</label>
			</div>
		</div>
	</div>	
	<!-- Overall objective of programme -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			     <label for="txtObjectiveofProgramme" class="col-md-4 control-label">Overall Objective of Programme</label>
		   		 <div class="col-md-8">
		      		<input type="text" class="form-control" id="txtObjectiveofProgramme" >
		    	</div>
		  	</div>
	  	</div>
	</div>
	<!-- Activity Description -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			     <label for="txtActivityDescription" class="col-md-4 control-label">Activity Description</label>
		   		 <div class="col-md-8">
		      		<input type="text" class="form-control" id="txtActivityDescription" >
		    	</div>
		  	</div>
	  	</div>
	</div>
	<!-- No of session -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			     <label for="numberofSesion" class="col-md-4 control-label">No of sesion</label>
		   		 <div class="col-md-3">
		      		<input type="number" class="form-control" id="numberofSesion" min="0" value="0">
		    	</div>
		  	</div>
	  	</div>
	  	<div class="col-md-6">
	  		<div class="form-group">
			     <label for="durationofsesion" class="col-md-5 control-label">Duration of each session</label>
		   		 <div class="col-md-3">
		      		<input type="number" class="form-control" id="durationofsessionhour" min="0" max="23" >
		    	</div>		    	
		    	<div class="col-md-3">
		      		<input type="number" class="form-control" id="durationofsessionminute" min="0" max="59">
		    	</div>
		  	</div>
	  	</div>
	</div>
	<!-- Description of each sesion/league -->
	<div class="row">
		<div class="form-group">
			<label class="col-md-3 control-label">Description of each session/league</label>
			<div class="col-md-6">
				<!-- table session -->
				<table class="table table-bordered" id="table-session">
					<tr>
						<td>Session</td>
						<td colspan="2">Discription</td>
					</tr>	
					<tr>
						<td><input type="text" class="form-control row-session" ></td>
						<td><input type="text" class="form-control row-description"></td>
						<td><button type="button" class="form-control button-delete-session"><span class="glyphicon glyphicon-trash"></span></button></td>
					</tr>
				</table>
			</div>
			<!-- button add  session -->
			<div class="col-md-3">
				<button type="button" class="btn btn-success" id="btn-add-sessions">Add session</button>
			</div>
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
				    <div class="col-md-1"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>
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
		   		 <div class="col-md-3">
		      		<input type="number" class="form-control" id="maximumGroupSize" min="0" value="0">
		    	</div>
		  	</div>
	  	</div>	  	
	</div>
	<!-- Cost per Pax -->
	<div class="row">
		<div class="form-group">
			<label class="col-md-3 control-label">Cost per Pax</label>
			<div class="col-md-6">
				<!-- table session -->
				<table class="table table-bordered" id="table-cost-per-pax">
					<tr>
						<td>Group</td>
						<td>Code</td>
						<td colspan="2">Remarks</td>
					</tr>					
					<tr>
						<td><input type='text' class='form-control row-group-tb-cost' ></td>
						<td><input type='text' class='form-control row-cost-tb-cost' ></td>
						<td><input type='text' class='form-control row-remarks-tb-cost' ></td>
						<td><button type='button' class='form-control btn-del-cost'><span class='glyphicon glyphicon-trash'></span></td>						
					</tr>
				</table>
			</div>
			<!-- button add  cost -->
			<div class="col-md-3">
				<button type="button" class="btn btn-success" id='btn-add-cost'>Add cost</button>
			</div>
		</div>
	</div>
	<!-- Cost per Programme/League -->
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<!-- Label cost per programme ...  -->
			     <label for="costPerProgramme" class="col-md-4 control-label">Cost per Programme/League</label>
		   		 <!-- button for change value -->
		   		 <div class="col-md-3">
		      		<input type="number" class="form-control" id="costPerProgramme" min="0" value="0">
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
		   		 <div class="col-md-3">
		      		<input type="number" class="form-control" id="minimumNumbertoStart" min="0" value="0">
		    	</div>
		  	</div>
	  	</div>	  	
	</div>
	<!-- Minimum age of participants -->
	<div class="row">
		<!-- Minimum age of participants -->
		<div class="col-md-4">
			<div class="form-group">
				<!-- Label cost per programme ...  -->
			     <label for="minimumAge" class="col-md-8 control-label">Minimum age of participants </label>
		   		 <!-- button for change value -->
		   		 <div class="col-md-4">
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
		   		 <div class="col-md-4">
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
			    <div class="col-sm-6">
					<select class="form-control">
						<option>N/A</option>									 
					  	<option>Male</option>
						<option>Female</option>										 
					</select>
			    </div>			    
	 		 </div>
		</div>
	</div>	
	<!-- Instructor to student ratio -->		
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Instructor to student ratio</label>
			    <div class="col-sm-3">					
					<input type="number" class="form-control" id="maximumAge" min="0" value="0">									 
				</div>
				<div class="col-sm-3">					
					<input type="number" class="form-control" id="maximumAge" min="0" value="0">									 
				</div>			    
	 		 </div>
		</div>
	</div>
		<!-- National Sports Association (NSA) -->		
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">National Sports Association</label>
			    <div class="col-sm-3">
					<select class="form-control">					 
					  	<option>Yes</option>
						<option>No</option>										 
					</select>
			    </div>			    
	 		 </div>
		</div>
	</div>
	<!-- Insurance coverage for Programme -->		
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Insurance coverage for Programme</label>
			    <div class="col-sm-3">					
					<input type="file" id="exampleInputFile">
				</div>							    
	 		</div>
		</div>
	</div>	
	<!-- League plan -->		
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">League plan (Mandatory for sport league)</label>
			    <div class="col-sm-3">					
					<input type="file" id="fileLeaguePlan">
				</div>							    
	 		</div>
		</div>
	</div>
	<!-- Risk Management Plan -->		
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Risk Management Plan</label>
			    <div class="col-sm-3">					
					<input type="file" id="fileRiskManagementPlan">
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
	<!-- List Activity Leader/Instructor -->
	<div id="leader-container">
		<div class='row'>
			<div class='col-md-6'>
				<div class='form-group'>
					<!-- label  List Activity Leader ... -->
				    <label class='col-md-4 control-label'>List Activity Leader/Instructor</label>
				    <!-- select activity leader -->
				    <div class='col-md-6'>
						<select class='form-control' style='width:100%;' id="select-list-leader">
						   <?php                   
	                     		 foreach ($list_leader as $key)
	                         	 echo "<option>".$key["name"]."</option>";
                    		?>												 
						</select>
				    </div>
				    <!-- button plus -->
				    <div class='col-md-1'><button type='button' class='btn btn-success btn-add-leader'><span class='glyphicon glyphicon-plus-sign'></span></button></div>
				    <!-- button trash -->
				    <div class='col-md-1'><button type='button' class='btn btn-default '><span class='glyphicon glyphicon-trash'></span></button></div>
		 		 </div>
			</div>
		</div>
	</div>
	<!-- Pre-requisite conditions -->
	<div id="requisite-condition-container">
		<div class='row'>
			<div class='col-md-6'>
				<div class='form-group'>
					<!-- label  Pre-requisite conditions -->
				    <label class='col-md-4 control-label'>Pre-requisite conditions</label>
				    <!-- select conditions -->
				    <div class='col-md-6'>
						<select class='form-control' style='width:100%;' id="select-additional-resources">
						   <?php                   
	                     		 foreach ($additional_resource as $key)
	                         	 echo "<option>".$key["name"]."</option>";
                    		?>															 
						</select>
				    </div>
				    <!-- button plus -->
				    <div class='col-md-1'><button type='button' class='btn btn-success btn-add-condition'><span class='glyphicon glyphicon-plus-sign'></span></button></div>
				    <!-- button trash -->
				    <div class='col-md-1'><button type='button' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span></button></div>
		 		 </div>
			</div>
		</div>
	</div>
	<!-- Additional resource -->
	<div class="row">
		<div class="form-group">
			<label class="col-md-3 control-label">Additional resources and/or accessories</label>
			<div class="col-md-6">
				<!-- Table Additional resource -->
				<table class="table table-bordered" id="table-additional-resources">
					<tr>
						<td>Item</td>
						<td>Unit</td>
						<td>Cost</td>
						<td colspan='2'>Remarks</td>
					</tr>
					<tr>
						<td><input type='text' class='form-control row-item-tb-res' ></td>
						<td><input type='text' class='form-control row-unit-tb-res' ></td>
						<td><input type='text' class='form-control row-cost-tb-res' ></td>
						<td><input type='text' class='form-control row-remark-tb-res' ></td>
						<td><button type='button' class='form-control btn-del-additional-resources'><span class='glyphicon glyphicon-trash'></span></td>						
					</tr>

				</table>
			</div>
			<!-- button add item -->
			<div class="col-md-3">
				<button type="button" class="btn btn-success" id="btn-add-additional-resources">Add item</button>
			</div>
		</div>
	</div>
	
	<div style=" margin-left: auto;    margin-right: auto;    width: 320px;">			
			<a href="<?php echo site_url('programme/endorsementRequest');?>" ><button type="button" class="btn btn-success">Submit Programme for endorsment</button></a>
			<a href="<?php echo site_url('programme/availableForRegistration');?>" ><button type="button" class="btn btn-success">Cancel</button></a>
	</div> 
</form>