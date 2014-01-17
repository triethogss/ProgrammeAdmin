
<style>
	.form-control
	{
		width: 100%;
		border: 1px solid black;
	}
	.row
	{
		margin-top: 5px;
	}
	.header-background
	{
		background-color: #cccccc;
		padding: 10px;
		margin: 10px;
	}
	.link
	{
		color: #0f5595;
		font-size: 16px;
		text-decoration: underline;	
	}
</style>
<ul class="nav nav-tabs" id="myTab">
  <li><a href="<?php echo site_url('programme/endorsementRequest');?>">Request</a></li> 
  <li class="active"><a href="#profile" data-toggle="tab">Endorsed</a></li>   
</ul>
<div class="tab-content">
<!-- Tab Request -->  
<!-- end tab request -->
<!-- Start tab endorsed -->
<div class="tab-pane active" id="profile">	
	<!-- header  -->
		<div class="header-background">
			<div class="row">
				<div class="col-md-2"><input class="form-control" placeholder="Search"></div>
				<div class="col-md-2"><a href="<?php echo site_url('programme/addNewProgramme');?>"><input type='button' class='btn btn-primary' value='Add a New Program' ></a></div>
				<div class="col-md-2"><a href="<?php echo site_url('programme/addnewevent');?>"><input type='button' class='btn btn-primary' value='Add an Event' ></a></div>
			</div>
			<div class="row">
				<!-- By date -->
				<div class="col-md-3">
					<div >
						<select class="form-control">
							<option>By Open to Public</option>
							<option>Not Open to Pubic</option>
						</select>
					</div>
				</div>
				<!-- By category -->
				<div class="col-md-3">
					<div >
						<select class="form-control">
							<option>By Date</option>
							<option>Other</option>
						</select>
					</div>
				</div>
				<!-- By Activity type -->
				<div class="col-md-3">
					<div >
						<select class="form-control">
							<option>By Date</option>
							<option>Other</option>
						</select>
					</div>
				</div>
				<!-- By venue -->
				<div class="col-md-3">
					<div >
						<select class="form-control">
							<option>By Date</option>
							<option>Other</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- end header  -->
	    <div style="margin:10px;"> <!-- div contain -->
			<div style='border-bottom:3px solid #cccccc;margin-top:20px;width:90%;'>
				<div style="width:100%;height:35px;">
					<!-- Name of programme -->
					<div style="float:left;"><a class="link" href='<?php echo site_url('programme/addProgrammeForRegistration');?>'>Learn-to-play Badminton</a> </div>
					<!-- Icon Delete --> 
					<div style="float:right;width:50px;"><button type="button" class="btn btn-default btn-del-endorsed-prog"><span class="glyphicon glyphicon-trash"></span></button></div>
					<!-- Icon Edit -->
					<div style="float:right;width:50px;"><a class="link" href='<?php echo site_url('programme/addNewProgramme');?>'><button type="button" class="btn btn-default btn-edit-endorsed-prog"><span class="glyphicon glyphicon-pencil"></span></button></a></div>
				</div>
				<div style="width:100%;height:20px;">
					<!-- date endorsed -->
					<div style="float:left;width:200px;">Submitted on 20 Dec2014</div>
					<!-- Type of programme -->
					<div style="float:right;width:200px;">Learn-to-play Programme</div>
					
				</div>
			</div>
			<div style='border-bottom:3px solid #cccccc;margin-top:20px;width:90%;'>
				<div style="width:100%;height:35px;">
					<!-- Name of programme -->
					<div style="float:left;"><a class="link" href='<?php echo site_url('programme/addProgrammeForRegistration');?>'>Aerobics</a> </div>
					<!-- Icon Delete --> 
					<div style="float:right;width:50px;"><button type="button" class="btn btn-default btn-del-endorsed-prog"><span class="glyphicon glyphicon-trash"></span></button></div>
					<!-- Icon Edit -->
					<div style="float:right;width:50px;"><a class="link" href='<?php echo site_url('programme/addNewProgramme');?>'><button type="button" class="btn btn-default btn-edit-endorsed-prog"><span class="glyphicon glyphicon-pencil"></span></button></a></div>
				</div>
				<div style="width:100%;height:20px;">
					<!-- date endorsed -->
					<div style="float:left;width:200px;">Submitted on 20 Dec2014</div>
					<!-- Type of programme -->
					<div style="float:right;width:200px;">Learn-to-play Programme</div>
					
				</div>
			</div>
		</div>
	<!-- Show each programme -->	
</div>
<!-- End endorsed -->
</div>
<!-- Dialog Confirm when delete endorsed programme -->
<!-- Modal -->
<div class="modal fade" data-backdrop="static"  id="dialog-confirm-del-endorsed-prog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
      	<button type="button" class="btn btn-primary" id="delete-endorsed-prog-yes">Yes</button>
        <button type="button" class="btn btn-primary" id="delete-endorsed-prog-no"data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->