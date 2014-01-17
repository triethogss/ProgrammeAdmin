<!-- show participant group -->
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
</style>
<!-- header -->
<div class="row" style="border-bottom:2px solid #cccccc;margin-bottom:10px;">
	<!-- Programme code  -->
	<div class="col-md-3">
		<p style="font-size:18px;font-weight:bold;">NAME OF PROGRAMME</p>
		<p>Aerobics dance</p>
	</div>
	<!-- Name of programme -->
	<div class="col-md-3">
		<p style="font-size:18px;font-weight:bold;">PROGRAMME CODE</p>
		<p>123-Pend</p>
	</div>
	<!-- Name of provider  -->
	<div class="col-md-6">

		<div class="btn-group">
		  <a href="<?php echo site_url('programme/addNewProgramme');?>"><button type="button" class="btn btn-default">Edit</button></a>
		  <a href="<?php echo site_url('programme/showParticipant');?>"><button type="button" class="btn btn-default">Participant</button></a>
		  <a href="<?php echo site_url('programme/showParticipantSession');?>"><button type="button" class="btn btn-default selected">Attendance</button></a>
		  <a href="<?php echo site_url('programme/availableForRegistration');?>"><button type="button" class="btn btn-default">Cancelation</button></a>
		</div> 	
	</div>
</div> <!-- end header -->
<!-- Row Participant -->
<div class="row">
	<label class="col-md-6">SESSION 1</label>
</div>
<div class="row">
	<div class="col-md-4">Mon-Feb 11-2014</div>
</div>
<div class="row">
	<div class="form-group">
		<label class="col-md-2">PARTICIPANT  </i></label>
		<!-- <div class="col-md-3">
			<input type="text" class="form-control">
		</div> -->
		<div class="form-group input-group col-md-2">
            <input type="text" class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
		</div>
		<div class="col-md-6" style="text-align:right;">
			<!-- button print -->
			<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-print"></span></i></button>
			<!-- button save -->
			<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span></button>
		</div>
	</div>
	<!-- <div class="col-md-2"><strong>PARTICIPANT</strong></div> -->	
</div>
<!-- Table participant -->
<div class="row">
	<div class="col-md-10">
		<!-- <div class="row">
			<div class="col-md-12" style="text-align:right;">
				<button type="button" class="btn btn-default"><i class="fa fa-print"></i></button>
				<button type="button" class="btn btn-default"><i class="fa fa-save"></i></button>
			</div>
	    </div> -->
		<table class="table table-bordered table-striped" style="margin:2px;">
			<tr>
				<th>S/n</th>
				<th>Name</th>
				<th>Membership</th>
				<th>Attendance</th>
				<th>Mobile</th>
				<th>Email</th>
				
			</tr>
			<!-- row 1  -->
			<tr>
				<td>1</td>
				<td>Alvin Ang</td>
				<td>A1234532</td>
				<td><input type="checkbox"></td>
				<td>99887766</td>
				<td>alvin@gmail.com</td>
			</tr>
			<!-- row 2  -->
			<tr>
				<td>2</td>
				<td>Bernard Boo</td>
				<td>A324352</td>
				<td><input type="checkbox"></td>
				<td>99988766</td>
				<td>bernie@gmail.com</td>
			</tr>
			<!-- row 3  -->
			<tr>
				<td>3</td>
				<td>Caterine Chin</td>
				<td>B2354253</td>
				<td><input type="checkbox"></td>
				<td>98798766</td>
				<td>catcat@gmail.com</td>
			</tr>
	
		</table>
		<!-- button send notification -->
		<div class="row">
			<div class="col-md-12" style="text-align:right;">	
				<a href="<?php echo site_url('programme/sendnotification');?>"><button type="button" class="btn btn-primary">Send Notification</button></a>
			</div>
	    </div>
	</div>
</div>
