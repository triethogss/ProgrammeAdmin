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
		<p style="font-size:18px;font-weight:bold;">PROGRAMME CODE</p>
		<p>123-Pend</p>
	</div>
	<!-- Name of programme -->
	<div class="col-md-3">
		<p  style="font-size:18px;font-weight:bold;">NAME OF PROGRAMME</p>
		<p>Aerobics dance</p>
	</div>
	<!-- Name of provider  -->
	<div class="col-md-6">

		<div class="btn-group">
		  <a href="<?php echo site_url('programme/addNewProgramme');?>"><button type="button" class="btn btn-default">Edit</button></a>
		  <a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default">Add participant</button></a>
		  <a href="<?php echo site_url('programme/showAttendance');?>"><button type="button" class="btn btn-default selected">Attendance</button></a>
		  <a href="<?php echo site_url('programme/availableForRegistration');?>"><button type="button" class="btn btn-default">Cancelation</button></a>
		</div> 	
	</div>
</div> <!-- end header -->
<!-- Row Participant -->
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
		<div class="col-md-4" style="text-align:right;">
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
	<div class="col-md-8">
		<!-- <div class="row">
			<div class="col-md-12" style="text-align:right;">
				<button type="button" class="btn btn-default"><i class="fa fa-print"></i></button>
				<button type="button" class="btn btn-default"><i class="fa fa-save"></i></button>
			</div>
	    </div> -->
		<table class="table table-bordered" style="margin:10px;">
			<tr>
				<th>S/n</th>
				<th>Group Name</th>
				<th>Name</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>					
					Select<input type="checkbox" id="check-all-participant-group">	
				</th>
				<th>Certificate</th>
				<th>Status</th>
				<th>Edit</th>
			</tr>
			<!-- row 1  -->
			<tr>
				<td>1</td>
				<td>ABC</td>
				<td>Alvin Ang</td>
				<td>99887766</td>
				<td>alvin99@gmail.com</td>
				<td class="center">
					<input type="checkbox" class="check-participant-group">
				</td>
				<td class="center">
					<button type="button" class="btn btn-default btn-download-certificate"><span class="glyphicon glyphicon-download-alt"></span></button>
				</td>
				<td>Registed</td>
				<td>
					<div style="float:left; margin:1px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
					<div style="float:left; margin:1px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>						
				</td>
			</tr>
			<!-- row 2  -->
			<tr>
				<td>2</td>
				<td>ABC</td>
				<td>Gerale Gan</td>
				<td>99887755</td>
				<td>alvin99@gmail.com</td>
				<td class="center">
					<input type="checkbox" class="check-participant-group">
				</td>
				<td class="center">
					<button type="button" class="btn btn-default btn-download-certificate"><span class="glyphicon glyphicon-download-alt"></span></button>
				</td>
				<td>Registed</td>
				<td>
					<div style="float:left; margin:1px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
					<div style="float:left; margin:1px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>						
				</td>
			</tr>
			<!-- row 3  -->
			<tr>
				<td>3</td>
				<td>ABC</td>
				<td>Elana Eng</td>
				<td>99887711</td>
				<td>alvin99@gmail.com</td>
				<td class="center">
					<input type="checkbox" class="check-participant-group">
				</td>
				<td class="center">
					<button type="button" class="btn btn-default btn-download-certificate"><span class="glyphicon glyphicon-download-alt"></span></button>
				</td>
				<td>Registed</td>
				<td>
					<div style="float:left; margin:1px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
					<div style="float:left; margin:1px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>						
				</td>
			</tr>
		</table>
		<!-- button send notification -->
		<div class="row">
			<div class="col-md-12" style="text-align:right;"><a href="<?php echo site_url('programme/sendnotification');?>"><button type="button" class="btn btn-primary">Send Notification</button></a></div>
	    </div>
	</div>
</div>