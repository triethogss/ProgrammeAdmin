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
		  <a href="<?php echo site_url('programme/showParticipant');?>"><button type="button" class="btn btn-default selected">Participant</button></a>
		  <a href="<?php echo site_url('programme/showAttendance');?>"><button type="button" class="btn btn-default ">Attendance</button></a>
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
	</div>
	<!-- <div class="col-md-2"><strong>PARTICIPANT</strong></div> -->	
</div>
<!-- Table participant -->
<div class="row">
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12" style="text-align:right;">
				<!-- button print -->
				<!-- <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-print"></span></i></button> -->
				<!-- button save -->
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span></button>
			</div>
	    </div>
	    <div class="table-responsive">
			<table class="table table-bordered table-striped" style="margin:10px;" id="table-participant">
				<thead>
					<tr>
						<th>S/n</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
					<!-- 	<th>					
							<div class="row">						
									<div class="col-md-6">Select</div>
									<div class="col-md-6"><input type="checkbox" id="checkbox-all-table-participant"></div>
							</div>	
						</th> -->
						<th>Certificate</th>
						<th>Status</th>
						<th>Edit</th>
					</tr>
				</thead>
				<!-- row 1  -->
				<tr>
					<td>1</td>
					<td>Alvin Ang</td>
					<td>99887766</td>
					<td>alvin99@gmail.com</td>
					<!-- <td class="center">
						<input type="checkbox" class="checkbox-participant">
					</td> -->
					<td class="center">
						<button type="button" class="btn btn-default btn-download-certificate"><span class="glyphicon glyphicon-download-alt"></span></button>
					</td>
					<td>Confirmed</td>
					<td>									
						<!-- button edit -->
						<div style="float:left; margin:1px;"><a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default btn-edit-participant"><span class="glyphicon glyphicon-pencil"></span></button></a></div>
						<!-- button delete -->
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-del-participant"><span class="glyphicon glyphicon-trash"></span></button></div>							
					</td>
				</tr>
				<!-- row 2  -->
				<tr>
					<td>2</td>
					<td>Alvin Ang</td>
					<td>99887766</td>
					<td>alvin99@gmail.com</td>
					<!-- <td class="center">
						<input type="checkbox" class="checkbox-participant">
					</td> -->
					<td class="center">
						<button type="button" class="btn btn-default btn-download-certificate"><span class="glyphicon glyphicon-download-alt"></span></button>
					</td>
					<td>Confirmed</td>
					<td>
						<!-- button edit -->
						<div style="float:left; margin:1px;"><a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default btn-edit-participant"><span class="glyphicon glyphicon-pencil"></span></button></a></div>
						<!-- button delete -->
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-del-participant"><span class="glyphicon glyphicon-trash"></span></button></div>		
					</td>
				</tr>
				<!-- row 3  -->
				<tr>
					<td>3</td>
					<td>Alvin Ang</td>
					<td>99887766</td>
					<td>alvin99@gmail.com</td>
				<!-- 	<td class="center">
						<input type="checkbox" class="checkbox-participant">
					</td> -->
					<td class="center">
						<button type="button" class="btn btn-default btn-download-certificate"><span class="glyphicon glyphicon-download-alt"></span></button>
					</td>
					<td>Confirmed</td>
					<td>
						<!-- button edit -->
						<div style="float:left; margin:1px;"><a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default btn-edit-participant"><span class="glyphicon glyphicon-pencil"></span></button></a></div>
						<!-- button delete -->
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-del-participant"><span class="glyphicon glyphicon-trash"></span></button></div>				
					</td>
				</tr>
			</table>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:right;"><a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-primary">Add Participant</button></a> <a href="<?php echo site_url('programme/sendnotification');?>"><button type="button" class="btn btn-primary">Send Notification</button></a></div>
			
	    </div>
	</div>
</div>
<!-- Row WAITING LIST -->
<div class="row">
	<div class="form-group">
		<label class="col-md-2">WAITING LIST </i></label>
		<!-- <div class="col-md-3">
			<input type="text" class="form-control">
		</div> -->
		<div class="form-group input-group col-md-2">
            <input type="text" class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
		</div>	
	</div>
	<!-- <div class="col-md-2"><strong>PARTICIPANT</strong></div> -->	
</div>
<!-- Table waiting list -->
<div class="row">
	<div class="col-md-8">
		<div><strong>Payment by (days) from available of vacancy : 2</strong></div>
		<div><strong>Reminder by (days) of payment due date : 1</strong></div>
		<div class="row">
			<div class="col-md-12" style="text-align:right;">
				<!-- <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-print"></span></i></button> -->
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span></button>
			</div>
	    </div>
	    <div class="table-responsive">
			<table class="table table-bordered table-striped" style="margin:10px;" id="table-waiting-list">
				<thead>
					<tr>
						<th>S/n</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
					<!-- 	<th>					
							<div class="row">						
									<div class="col-md-6">Select</div>
									<div class="col-md-6"><input type="checkbox" id="checkbox-all-waiting-list"></div>
							</div>	
						</th> -->
						<th>Member</th>
						<th>Status</th>
						<th>Edit</th>
					</tr>
				</thead>
				<!-- row 1  -->
				<tr>
					<td>1</td>
					<td>Alvin Ang</td>
					<td>99887766</td>
					<td>alvin99@gmail.com</td>
				<!-- 	<td class="center">
						<input type="checkbox" class="checkbox-waiting-list">
					</td> -->
					<td>
						<p>Yes</p>
					</td>
					<td>Pending Payment</td>
					<td>
						<!-- button edit -->
						<div style="float:left; margin:1px;"><a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default btn-edit-participant-waiting"><span class="glyphicon glyphicon-pencil"></span></button></a></div>
						<!-- button delete -->
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-del-participant-waiting"><span class="glyphicon glyphicon-trash"></span></button></div>			
					</td>
				</tr>
				<!-- row 2  -->
				<tr>
					<td>2</td>
					<td>Alvin Ang</td>
					<td>99887766</td>
					<td>alvin99@gmail.com</td>
				<!-- 	<td class="center">
						<input type="checkbox" class="checkbox-waiting-list">
					</td> -->
					<td>
						<p>No</p>
					</td>
					<td>Waiting list</td>
					<td>
						<!-- button edit -->
						<div style="float:left; margin:1px;"><a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default btn-edit-participant-waiting"><span class="glyphicon glyphicon-pencil"></span></button></a></div>
						<!-- button delete -->
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-del-participant-waiting"><span class="glyphicon glyphicon-trash"></span></button></div>		
					</td>
				</tr>
				<!-- row 3  -->
				<tr>
					<td>3</td>
					<td>Alvin Ang</td>
					<td>99887766</td>
					<td>alvin99@gmail.com</td>
				<!-- 	<td class="center">
						<input type="checkbox" class="checkbox-waiting-list">
					</td> -->
					<td>
						<p>Yes</p>
					</td>
					<td>No responsed</td>
					<td>
						<!-- button edit -->
						<div style="float:left; margin:1px;"><a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default btn-edit-participant-waiting"><span class="glyphicon glyphicon-pencil"></span></button></a></div>
						<!-- button delete -->
						<div style="float:left; margin:1px;"><button type="button" class="btn btn-default btn-del-participant-waiting"><span class="glyphicon glyphicon-trash"></span></button></div>				
					</td>
				</tr>
			</table>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align:right;"><a href="<?php echo site_url('programme/sendnotification');?>"><button type="button" class="btn btn-primary">Send Notification</button></a></div>
	    </div>
	</div>
</div>
<!-- Dialog Confirm when delete participant -->
<!-- Modal -->
<div class="modal fade" id="dialog-confirm-del-participant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
      	<button type="button" class="btn btn-primary" id="delete-participant-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="delete-participant-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Dialog Confirm when delete participant -->
<!-- Modal -->
<div class="modal fade" data-backdrop="static"  id="dialog-confirm-del-participant-waiting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
      	<button type="button" class="btn btn-primary" id="delete-participant-waiting-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="delete-participant-waiting-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->