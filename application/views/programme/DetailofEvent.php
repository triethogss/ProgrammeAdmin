<!-- Detail of available programme -->
<style>
	.title
	{
		font-weight: bold;
	}
	.table-responsive th
	{
		background-color: #cccccc;
	}
</style>
<!--  -->
<div class="row" style="border-bottom:2px solid #cccccc;">
	<!-- Programme code  -->
	<div class="col-md-4">
		<p style="font-size:18px;font-weight:bold;">NAME OF EVENT</p>
		<p>Health Talk</p>
	</div>
	<!-- Name of programme -->
	<div class="col-md-3">
		<p  style="font-size:18px;font-weight:bold;">EVENT CODE</p>
		<p>Heal0214SK002</p>
	</div>
	<!-- button group  -->
	<div class="col-md-5">
		<div class="btn-group">
		  <a href="<?php echo site_url('programme/addNewProgramme');?>"><button type="button" class="btn btn-default">Edit</button></a>
		  <a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default">Add participant</button></a>
		  <a href="<?php echo site_url('programme/showAttendance');?>"><button type="button" class="btn btn-default">Attendance</button></a>
		  <a href="<?php echo site_url('programme/availableForRegistration');?>"><button type="button" class="btn btn-default">Cancelation</button></a>
		</div>
	</div>
</div>
<!-- <div class="title">DESCRTIPTION</div>
<div>Aerobics Dance is a form of exercise ... </div> -->
<div style="margin:auto;width:80%;">
	<div class="title">Session</div>
	<div class="row">
		<div class="col-md-10">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
			  		<thead>
				  		<tr>
				  			<th>Date</th>
				  			<th>Start time</th>
				  			<th>End time</th>
				  			<th>Sub-venue</th>
				  			<th>Facility Booking Code</th>
				  			
				  		</tr>
			  		</thead>
			  		<tr>
			  			<td>Sun-Feb 2-2014</td>
			  			<td>10:00am</td>
			  			<td>11:00am</td>
			  			<td>Sengkang Sports Hall</td>
			  			<td>Fac-126</td>
			  			
			   		</tr>
			   		<tr>
			  			<td>Sun-Feb 2-2014</td>
			  			<td>11:00am</td>
			  			<td>12:00pm</td>
			  			<td>Sengkang Sports Hall</td>
			  			<td>Fac 123</td>
			  			
			   		</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="row">
		<!-- column 1 -->
		<div class="col-md-8">
			<!-- row 1 -->
			<div class="row">
				<label class="control-label col-md-3">Event Period:</label>
				<div class="col-md-4">2 Feb-2 Feb 2014</div>
			</div>
			<!-- row 2 -->
			<div class="row">
				<label class="col-md-3">Registration Start Date:</label>
				<div class="col-md-3">Jan 2, 2014 8:00AM</div>
				<label class="col-md-2">End date</label>
				<div class="col-md-3">Jan 14, 2014 6:00PM</div>
			</div>
			<!-- row 3 -->
			<div class="row">
				<label class="col-md-3">Event Description:</label>
				<div class="col-md-4">Aerobics is...</div>
			</div>

		</div>
		<!-- column 2 -->
		<div class="col-md-3">		
		</div>
	</div>
	<!-- Target Group -->
	<div class="row">
		<label class="col-md-2">Targer Audience</label>
		<div class="col-md-4">Adults between age of 24 to 40</div>
	</div>
	<!-- Class size -->
	<div class="row">
		<div class="col-md-5">
			<!-- Class size -->
			<div class="row">
				<label class="col-md-6">Event size</label>
				<div class="col-md-6">1000</div>
			</div>
			<!-- Contact Person -->
			<div class="row">
				<label class="col-md-6">Contact Person for Enquiry</label>
				<div class="col-md-6">Micheal Tan</div>
			</div>
			<!-- Mobile and Office -->
			<div class="row">
				<label class="col-md-2">Mobile</label>
				<div class="col-md-4">98978778</div>
				<label class="col-md-3">Office:</label>
				<div class="col-md-3"></div>
			</div>
			<!-- Fax -->
			<div class="row">
				<label class="col-md-2">Fax:</label>
				<div class="col-md-4"></div>			
			</div>
			<!-- Mobile and Office -->
			<div class="row">
				<label class="col-md-2">Email:</label>
				<div class="col-md-4">micheal80@gmail.com</div>
				<label class="col-md-3">Website:</label>
				<div class="col-md-3"></div>
			</div>

		</div>
		<div class="col-md-5">
			<div class="row">
				<label class="col-md-4">Cost per Pax</label>
				<div class="col-md-8">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Group</th>
									<th>Cost</th>
									<th>Remark</th>
								</tr>
							</thead>
							<tr>
								<td>Member</td>
								<td>$5</td>
								<td></td>
							</tr>
							<tr>
								<td>Non-Member</td>
								<td>$8</td>
								<td></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="row">
		<label class="col-md-6" >Additonal resources and/ or merchandises</label>
	</div>
	<div class="row" style="border-bottom:2px solid #cccccc;margin-bottom:10px;">
		<div class="col-md-3">
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

	<!-- ========================================== -->
	<div class="row">
		<label class="col-md-6">This event is for all user</label>
	</div>
	<div class="row">
		<label class="col-md-6">This event is display to the public</label>
	</div>
	<div class="row">
		<label class="col-md-6">This programme is catered for individual registration only</label>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-6"><strong>Tag word : </strong>Health, Talk, Male, Female, Age</div>

	</div>
	<!-- Discount scheme -->
	<div class='row'>
		<label class="col-md-2 title" >Discount Scheme:</label>
		<div class="col-md-2">NA</div>
	</div>
	<!-- Programme Category -->
	<div class='row'>
		<label class="col-md-2 title" >Event Category:</label>
		<div class="col-md-2">Social Event</div>
	</div>
	<!-- Activity  -->
	<div class="row">
			<label class="col-md-2 title">Activity:</label>
			<div class="col-md-2">Talk</div>	
			<label class="col-md-2 title">Sport catogery:</label>
			<div class="col-md-2">Event</div>

	</div>
	<!-- Sport type -->
	<div class="row">
		<div class="col-md-2 title">Activity type:</div>
		<div class="col-md-2">Event</div>
		<div class="col-md-2 title">Sport type:</div>
		<div class="col-md-2">Indoor</div>
	</div>
	<!-- Overall objective of Programme -->
	<div class="row">
		<label class="col-md-3">Overall objective of Programme </label>
		<div class="col-md-4">Promote healthy lifestyle with...</div>
	</div>
	<!-- No. of  session -->
	<div class="row">
		<label class="col-md-2">No. of session</label>
		<div class="col-md-2">1</div>
		<label class="col-md-2">Duration of each session</label>
		<div class="col-md-2">02H:00M</div>
	</div>
	<!-- each of session  -->
	<!-- session 1 -->
	<div class="row">
		<label class="col-md-2">Session 1</label>
		<div class="col-md-2">Health Talk...</div>
	</div>

	<!-- Venue Requirement -->
	<div class="row">
		<label class="col-md-3">Venue Requirement:</label>
		<div class="col-md-3">Air-conditioned</div>
		<label class="col-md-3">Minimum number start:</label>
		<div class="col-md-2">50</div>
	</div>
	<!-- Equipment Requirement -->
	<div class="row">
		<label class="col-md-3 ">Equipment Requirement:</label>
		<div class="col-md-3">Tables and chairs</div>
		<label class="col-md-3">Minimum age of participants:</label>
		<div class="col-md-2">24</div>
	</div>
	<!-- Cost per Programme/League -->
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<label class="col-md-3">Maximum age of participants:</label>
		<div class="col-md-2">40</div>
	</div>
	<!-- Insurance coverage for Programme  -->
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
		<label class="col-md-3">Participant gender</label>
		<div class="col-md-2">Female</div>
	</div>

	<!-- Minimum class size not met: -->
	<div class="row">
		<label class="col-md-3">Minimum class size not met:</label>
	</div>
	<div style="margin-left:30px;">
		<div class='row'>
			<div class="col-md-6"><strong>Release of facility:</strong>  Yes</div>
		</div>
		<div class="row">
			<div class="col-md-3"><strong>1st Remider:</strong>  28/01/2014 10:00</div>
			<div class="col-md-3"><strong>2nd Remider:</strong>  04/02/2014 10:00</div>	
		</div>
		<div style="margin-left:30px;">
			<div class="row">
				<div class="col-md-6"><strong>To notify: </strong>Micheal Tan, Ng Eng Soon, CM, ACM</div>
			</div>
			<div class="row">
				<div class="col-md-6"><strong>Message: </strong>Please note, Aerobic Dance (123- Endorsed) has not meet it's minimum class size</div>
			</div>
		</div>
	</div>
	
</div>











