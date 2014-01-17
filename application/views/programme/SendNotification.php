<!-- send notification -->
<style>
	.title
	{
		font-weight: bold;
	}
	.selected
	{
		background-color: #95bcf2;
	}
	.bottom-line
	{
		border-bottom:2px solid #cccccc;
		margin:10px;
		padding: 10px;
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
		<!-- Name of programme -->
	<div class="col-md-3">
		<p  style="font-size:18px;font-weight:bold;">NAME OF PROGRAMME</p>
		<p>Aerobics dance</p>
	</div>
	<!-- Programme code  -->
	<div class="col-md-3">
		<p style="font-size:18px;font-weight:bold;">PROGRAMME CODE</p>
		<p>123-Pend</p>
	</div>
	<!-- Name of provider  -->
	<div class="col-md-6">

		<div class="btn-group">
		  <a href="<?php echo site_url('programme/addNewProgramme');?>"><button type="button" class="btn btn-default">Edit</button></a>
		  <a href="<?php echo site_url('programme/SendNotification');?>"><button type="button" class="btn btn-default selected">Add participant</button></a>
		  <a href="<?php echo site_url('programme/showAttendance');?>"><button type="button" class="btn btn-default">Attendance</button></a>
		  <a href="<?php echo site_url('programme/availableForRegistration');?>"><button type="button" class="btn btn-default">Cancelation</button></a>
		</div> 	
	</div>
</div> <!-- end header -->
<div class="bottom-line"><strong>SEND NOTIFICATION</strong></div>
<div class="bottom-line">
	<p>SMS/Push Notification</p>
	<textarea class="form-control" rows="3"></textarea>
</div>
<!-- Email, Subject, Content -->
<div class="bottom-line">
	<!-- Email title -->
	<p><strong>Email</strong></p>
	<!-- Subject -->
	<div class="row" >
		<div class="col-md-1">Subject</div>
		<div class="col-md-7"><input type="text" class="form-control"></div>
	</div>
	<!-- Content -->
	<div class="row" style="margin-top:10px;">
		<div class="col-md-1">Content</div>
		<div class="col-md-7"><textarea class="form-control" rows="4"></textarea></div>
	</div>
</div>
<!-- table participant -->
<div class="row">
	<div class="col-md-5">
		<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>S/n</th>
						<th>Name</th>
						<th>Email<input type="checkbox" id="checkbox-all-email"></th>
						<th>Push Notification<input type="checkbox" id="checkbox-all-notification"></th>
						<th>SMS<input type="checkbox" id="checkbox-all-sms"></th>
					</tr>
				</thead>
				<tr>
					<td>1</td>
					<td>Alvin An</td>
					<td class="center"><input type="checkbox" class="check-email"></td>
					<td class="center"><input type="checkbox" class="check-notification"></td>
					<td class="center"><input type="checkbox" class="check-sms"></td>				
				</tr>
				<tr>
					<td>2</td>
					<td>Bernard Boo</td>
					<td class="center"><input type="checkbox" class="check-email"></td>
					<td class="center"><input type="checkbox" class="check-notification"></td>
					<td class="center"><input type="checkbox" class="check-sms"></td>			
				</tr>
				<tr>
					<td>3</td>
					<td>Caterine Chin</td>
					<td class="center"><input type="checkbox" class="check-email"></td>
					<td class="center"><input type="checkbox" class="check-notification"></td>
					<td class="center"><input type="checkbox" class="check-sms"></td>				
				</tr>
			<table>
		</div>
		<!-- Button send notification -->
		<div class="row">
			<div class="col-md-12" style="text-align:right;"><a href="<?php echo site_url('programme/showParticipant');?>"><button type="button" class="btn btn-primary">Send Notification</button></a></div>
		</div>
	</div>
</div> <!-- end table -->

