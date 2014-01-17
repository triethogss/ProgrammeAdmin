<!-- Show attendance -->
<style>
	.title
	{
		font-weight: bold;
	}
	.selected
    {
        background-color: #95bcf2;
    }
    .center
    {
    	text-align: center;
    }
    .table-responsive th
    {
    	background-color: #cccccc;
    }
</style>
<!-- header -->
<div class="row" style="border-bottom:2px solid #cccccc;margin-bottom:10px;">
	<!-- Programme code  -->
	<div class="col-md-3">
		<p style="font-size:18px;font-weight:bold;">NAME OF PROGRAMME</p>
		<p>Aerobics Dance</p>
	</div>
	<!-- Name of programme -->
	<div class="col-md-3">
		<p  style="font-size:18px;font-weight:bold;">PROGRAMME CODE</p>
		<p>Aero0114S</p>
	</div>
	<!-- Name of provider  -->
	<div class="col-md-6">

		<div class="btn-group">
		  <a href="<?php echo site_url('programme/addNewProgramme');?>"><button type="button" class="btn btn-default">Edit</button></a>
		  <a href="<?php echo site_url('programme/showParticipant');?>"><button type="button" class="btn btn-default">Participant</button></a>
		  <a href="<?php echo site_url('programme/showAttendance');?>"><button type="button" class="btn btn-default selected">Attendance</button></a>
		  <a href="<?php echo site_url('programme/availableForRegistration');?>"><button type="button" class="btn btn-default">Cancelation</button></a>
		</div> 	
	</div>
</div> <!-- end header -->
<!-- Start Content -->
<div class="row">
	<div class="col-md-6">
		<strong>SESSION</strong>
	</div>
</div>
<div class="row">
	<div class="col-md-7 table-responsive">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Date</th>
					<th>Start time</th>
					<th>End time</th>
					<th>Sub-Venue</th>
				</tr>
			</thead>
			<tr>
				<td><a href="<?php echo site_url('programme/showParticipantSession');?>">Mon-Feb 11-2014</a></td>
				<td>8:00pm</td>
				<td>9:00pm</td>
				<td>Sengkang Studio 1</td>
			</tr>
			<tr>
				<td><a href="<?php echo site_url('programme/showParticipantSession');?>">Mon-Feb 25-2014</a></td>
				<td>8:00pm</td>
				<td>9:00pm</td>
				<td>Sengkang Studio 1</td>
			</tr>
			<tr>
				<td><a href="<?php echo site_url('programme/showParticipantSession');?>">Mon-Feb 4-2014</a></td>
				<td>8:00pm</td>
				<td>9:00pm</td>
				<td>Sengkang Studio 1</td>
			</tr>
		</table>

	</div>
</div>