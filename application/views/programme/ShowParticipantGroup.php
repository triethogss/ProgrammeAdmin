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
		  <a href="<?php echo site_url('programme/showParticipantGroup');?>"><button type="button" class="btn btn-default selected">Participant</button></a>
		  <a href="<?php echo site_url('programme/showAttendance');?>"><button type="button" class="btn btn-default">Attendance</button></a>
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
				<th>Group Name</th>
				<th>Name</th>
				<th>Mobile</th>
				<th>Email</th>
				<!-- <th>					
					Select<input type="checkbox" id="check-all-participant-group">	
				</th> -->
				<th>Certificate</th>
				<th>Status</th>
				<th>Edit</th>
			</tr>
			<!-- row 1  -->
			<tr>
				<td>1</td>
				<td>ABC</td>
				<td><input type="text"  value="Alvin Ang" class="form-control participant-name"  style="width:100%;" disabled></td>
				<td><input type="text"  value="99887766" class="form-control participant-mobile"  style="width:100%;" disabled></td>
				<td><input type="text"  value="alvin99@gmail.com" class="form-control participant-email"  style="width:100%;" disabled></td>
			<!-- 	<td class="center">
					<input type="checkbox" class="check-participant-group">
				</td> -->
				<td class="center">
					<button type="button" class="btn btn-default btn-download-certificate"><span class="glyphicon glyphicon-download-alt"></span></button>
				</td>
				<td>Registed</td>
				<td>
					<div style="width:100px;height:auto;">
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-edit-participant-group" id="1"><span class="glyphicon glyphicon-pencil"></span></button></div>
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-del-participant-group-attendance"><span class="glyphicon glyphicon-trash"></span></button></div>						
					</div>
				</td>
			</tr>
			<!-- row 2  -->
			<tr>
				<td>2</td>
				<td>ABC</td>
				<td><input type="text"  value="Gerale Gan" class="form-control participant-name"  style="width:100%;" disabled></td>
				<td><input type="text"  value="99887755" class="form-control participant-mobile"  style="width:100%;" disabled></td>
				<td><input type="text"  value="alvin99@gmail.com" class="form-control participant-email"  style="width:100%;" disabled></td>
			<!-- 	<td class="center">
					<input type="checkbox" class="check-participant-group">
				</td> -->
				<td class="center">
					<button type="button" class="btn btn-default btn-download-certificate"><span class="glyphicon glyphicon-download-alt"></span></button>
				</td>
				<td>Registed</td>
				<td>
					<div style="width:100px;height:auto;">
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-edit-participant-group" id="1"><span class="glyphicon glyphicon-pencil"></span></button></div>
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-del-participant-group-attendance"><span class="glyphicon glyphicon-trash"></span></button></div>						
					</div>						
				</td>
			</tr>
			<!-- row 3  -->
			<tr>
				<td>3</td>
				<td>ABC</td>
				<td><input type="text"  value="Elana Eng" class="form-control participant-name"  style="width:100%;" disabled></td>
				<td><input type="text"  value="99887711" class="form-control participant-mobile"  style="width:100%;" disabled></td>
				<td><input type="text"  value="alvin99@gmail.com" class="form-control participant-email"  style="width:100%;" disabled></td>
			<!-- 	<td class="center">
					<input type="checkbox" class="check-participant-group">
				</td> -->
				<td class="center">
					<button type="button" class="btn btn-default btn-download-certificate"><span class="glyphicon glyphicon-download-alt"></span></button>
				</td>
				<td>Registed</td>
				<td>
					<div style="width:100px;height:auto;">
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-edit-participant-group" id="1"><span class="glyphicon glyphicon-pencil"></span></button></div>
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-del-participant-group-attendance"><span class="glyphicon glyphicon-trash"></span></button></div>						
					</div>						
				</td>
			</tr>
		</table>
		<!-- button send notification -->
		<div class="row">
			<div class="col-md-12" style="text-align:right;">
				<a href="<?php echo site_url('programme/sendnotification');?>"><button type="button" class="btn btn-primary">Add Participant</button></a>
				<a href="<?php echo site_url('programme/sendnotification');?>"><button type="button" class="btn btn-primary">Send Notification</button></a>

			</div>
	    </div>
	</div>
</div>
<!-- Dialog Confirm when delete participant -->
<!-- Modal -->
<div class="modal fade" data-backdrop="static"  id="dialog-confirm-del-participant-group" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Do you want delete this programme ?
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" id="delete-participant-group-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="delete-participant-group-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->