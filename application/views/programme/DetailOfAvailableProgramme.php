<!-- Detail of available programme -->
<style>
	.title
	{
		font-weight: bold;
	}
</style>
<!--  -->
<div class="row" style="border-bottom:2px solid #cccccc;">
	<!-- Programme code  -->
	<div class="col-md-4">
		<p style="font-size:18px;font-weight:bold;">PROGRAMME CODE</p>
		<p>123-Pend</p>
	</div>
	<!-- Name of programme -->
	<div class="col-md-3">
		<p  style="font-size:18px;font-weight:bold;">NAME OF PROGRAMME</p>
		<p>Aerobics dance</p>
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
		<div class="col-md-8">
			<table class="table table-bordered">
		  		<tr>
		  			<th>Date</th>
		  			<th>Start time</th>
		  			<th>End time</th>
		  			<th>Sub-venue</th>
		  			<th>Facility Booking Code</th>
		  			<th>Revenue Centre</th>
		  		</tr>
		  		<tr>
		  			<td>Mon-Feb 11-2014</td>
		  			<td>8:00PM</td>
		  			<td>9:00PM</td>
		  			<td>Sengkong Studio 1</td>
		  			<td>Fac 123</td>
		  			<td>SK01</td>
		   		</tr>
		   		<tr>
		  			<td>Mon-Feb 25-2014</td>
		  			<td>8:00PM</td>
		  			<td>9:00PM</td>
		  			<td>Sengkong Studio 1</td>
		  			<td>Fac 123</td>
		  			<td>SK01</td>
		   		</tr>
			</table>
		</div>
	</div>

	<div class="row">
		<!-- column 1 -->
		<div class="col-md-8">
			<!-- row 1 -->
			<div class="row">
				<label class="control-label col-md-3">Programme Period:</label>
				<div class="col-md-4">11 Feb-25 Feb 2014</div>
			</div>
			<!-- row 2 -->
			<div class="row">
				<label class="col-md-3">Registration Start Date:</label>
				<div class="col-md-3">Jan 2, 2014 8:00AM</div>
				<label class="col-md-2">End date</label>
				<div class="col-md-3">Jan 31, 2014 6:00PM</div>
			</div>
			<!-- row 3 -->
			<div class="row">
				<label class="col-md-3">Activity Description:</label>
				<div class="col-md-4">Aerobics is...</div>
			</div>

		</div>
		<!-- column 2 -->
		<div class="col-md-3">		
		</div>
	</div>
	<!-- Target Group -->
	<div class="row">
		<label class="col-md-2">Targer Groups</label>
		<div class="col-md-4">Adults between age of 24 to 40</div>
	</div>
	<!-- Class size -->
	<div class="row">
		<div class="col-md-4">
			<!-- Class size -->
			<div class="row">
				<label class="col-md-6">Class size</label>
				<div class="col-md-6">20</div>
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
		<div class="col-md-4">
			<div class="row">
				<label class="col-md-4">Cost per Pax</label>
				<div class="col-md-8">
					<table class="table table-bordered">
						<tr>
							<td>Group</td>
							<td>Cost</td>
							<td>Remark</td>
						</tr>
						<tr>
							<td>Member</td>
							<td>$80</td>
							<td></td>
						</tr>
						<tr>
							<td>Non-Member</td>
							<td>$88</td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- List activity leader -->
	<div class="row">
		<label class="col-md-3">List Activity Leader/Instructror</label>
		<div class="col-md-2">
			<table class="table table-bordered table-striped">
				<tr>
					<td>Micheal Tan</td>
				</tr>
				<tr>
					<td>Angel Lim</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<label class="col-md-2">Pre-requisite conditions:</label>
		<div class="col-md-2">NA</div>
		<label class="col-md-1">Declaration</label>
		<div class="col-md-2">General Declaration</div>
	</div>
	<div class="row">
		<label class="col-md-3" >Additonal resources and/ or accessories</label>
	</div>
	<div class="row">
		<div class="col-md-3">
			<table class="table table-bordered table-striped">
				<tr>
					<th>Item</th>
					<th>Unit</th>
					<th>Cost</th>
					<th>Remarks</th>
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

	<!-- ========================================== -->
	<div class="row">
		<label class="col-md-6">This programme is open for public</label>
	</div>
	<div class="row">
		<label class="col-md-6">This programme is catered for individual registration only</label>
	</div>
	<!-- Programme Category -->
	<div class='row'>
		<label class="col-md-2 title" >Programme Category:</label>
		<div class="col-md-2">Sports Play</div>
	</div>
	<!-- Programme category -->
	<div class="row">
			<label class="col-md-2 title">Activity:</label>
			<div class="col-md-2">Aerobics</div>	
			<label class="col-md-2 title">Sport catogery:</label>
			<div class="col-md-2">Studio Based</div>

	</div>
	<!-- Sport type -->
	<div class="row">
		<div class="col-md-2 title">Activity type:</div>
		<div class="col-md-2">Fitness and wellness</div>
		<div class="col-md-2 title">Sport type:</div>
		<div class="col-md-2">Studio</div>


		<!-- <div class="col-md-4"> 
			<div class="col-md-6">Sport type:</div>
			<div class="col-md-6">Studio</div>
		</div>
		<div class="col-md-4"> 
			<div class="col-md-6">Activity type:</div>
			<div class="col-md-6">Fitness and wellness</div>
		</div> -->
	</div>
	<!-- Overall objective of Programme -->
	<div class="row">
		<label class="col-md-3">Overall objective of Programme </label>
		<div class="col-md-4">Promote healthy lifestyle with...</div>
	</div>
	<!-- No. of  session -->
	<div class="row">
		<label class="col-md-2">No. of session</label>
		<div class="col-md-2">3</div>
		<label class="col-md-2">Duration of each session</label>
		<div class="col-md-2">00H:50M</div>
	</div>
	<!-- each of session  -->
	<!-- session 1 -->
	<div class="row">
		<label class="col-md-2">Session 1</label>
		<div class="col-md-2">Start with ....</div>
	</div>
	<!-- session 2 -->
	<div class="row">
		<label class="col-md-2">Session 2</label>
		<div class="col-md-2">Proceed ....</div>
	</div>
	<!-- session 3 -->
	<div class="row">
		<label class="col-md-2">Session 3</label>
		<div class="col-md-2">End with ....</div>
	</div>
	<!-- Venue Requirement -->
	<div class="row">
		<label class="col-md-2">Venue Requirement:</label>
		<div class="col-md-3">Air-conditioned</div>
		<label class="col-md-2">Minimum number start:</label>
		<div class="col-md-2">15</div>
	</div>
	<!-- Equipment Requirement -->
	<div class="row">
		<label class="col-md-2 ">Equipment Requirement:</label>
		<div class="col-md-3">Air-conditioned</div>
		<label class="col-md-2">Minimum age of participants:</label>
		<div class="col-md-2">24</div>
	</div>
	<!-- Cost per Programme/League -->
	<div class="row">
		<label class="col-md-2">Cost per Programme/League:</label>
		<div class="col-md-3">NA</div>
		<label class="col-md-2">Maximum age of participants:</label>
		<div class="col-md-2">40</div>
	</div>
	<!-- Insurance coverage for Programme  -->
	<div class="row">
		<label class="col-md-2">Insurance coverage for Programme:</label>
		<div class="col-md-3">File...</div>
		<label class="col-md-2">Participant gender</label>
		<div class="col-md-2">Female</div>
	</div>
	<!-- League plan -->
	<div class="row">
		<label class="col-md-2">League plan(Mandatory for sport league):</label>
		<div class="col-md-3">NA</div>
		<label class="col-md-2">Instructor to student ratio</label>
		<div class="col-md-2">1:20</div>
	</div>
	<!-- >National Sports Association -->
	<div class="row">
		<label class="col-md-2">National Sports Association (NSA)</label>
		<div class="col-md-2">Yes</div>	
	</div>
	<!-- Risk Management Plan -->
	<div class="row">
		<label class="col-md-2">Risk Management Plan:</label>
		<div class="col-md-3">File name .... </div>
	</div>
	<!-- No. of respone day for payment -->
	<div class="row">
		<label class="col-md-2">No. of respone day for payment:</label>
		<div class="col-md-1">1</div>
		<label class="col-md-3">Reminder for payment (no. of day before payment due)</label>
		<div class="col-md-1">1</div>
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
	<!-- Certificate type -->
	<div class="row">
		<div class="col-md-8"><strong>Certificate Type:</strong> Micheal Tan, Ng Eng Soon, CM, ACM</div>
	</div>
</div>











