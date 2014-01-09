
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
  <li class="active"><a href="#home" data-toggle="tab">Request</a></li>
  <!-- <li><a href="#profile" data-toggle="tab">Endorsed</a></li>   -->
  <li><a href="<?php echo site_url('programme/endorsementendorsed');?>" >Endorsed</a></li> 
</ul>
<div class="tab-content">
  <!-- Tab Request -->
  <div class="tab-pane active" id="home">
		<div class="header-background">
			<div class="row">
				<div class="col-md-2"><input class="form-control" placeholder="Search"></div>
				<div class="col-md-1"><a href="<?php echo site_url('programme/addNewProgramme');?>"><input type='button' class='btn btn-primary' value='Add a New Program' ></a></div>
			</div>
			<div class="row">
				<!-- By date -->
				<div class="col-md-3">
					<div >
						<select class="form-control">
							<option>By Date</option>
							<option>Other</option>
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
					<div style="float:left;"><a class="link" href='<?php echo site_url('programme/detailOfRequestProgramme');?>'>Learn-to-play Badminton</a> </div>
					<!-- Icon Delete --> 
					<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>
					<!-- Icon Edit -->
					<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
				</div>
				<div style="width:100%;height:20px;">
					<!-- date submmit -->
					<div style="float:left;width:200px;">Submitted on 20 Dec2014</div>
					<!-- Type of programme -->
					<div style="float:right;width:200px;">Learn-to-play Programme</div>
					
				</div>
			</div>
			<div style='border-bottom:3px solid #cccccc;margin-top:20px;width:90%;'>
				<div style="width:100%;height:35px;">
					<!-- Name of programme -->
					<div style="float:left;"><a class="link" href='<?php echo site_url('programme/detailOfRequestProgramme');?>'>Learn-to-Swim</a> </div>
					<!-- Icon Delete --> 
					<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>
					<!-- Icon Edit -->
					<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
				</div>
				<div style="width:100%;height:25px;">
					<!-- date submmit -->
					<div style="float:left;width:200px;">Submitted on 20 Dec2014</div>
					<!-- Type of programme -->
					<div style="float:right;width:200px;">Learn-to-play Programme</div>
					
				</div>
			</div>
			<div style='border-bottom:3px solid #cccccc;margin-top:20px;width:90%;'>
				<div style="width:100%;height:35px;">
					<!-- Name of programme -->
					<div style="float:left;"><a class="link" href='<?php echo site_url('programme/detailOfRequestProgramme');?>'>Health Talk</a> </div>
					<!-- Icon Delete --> 
					<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>
					<!-- Icon Edit -->
					<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
				</div>
				<div style="width:100%;height:20px;">
					<!-- date submmit -->
					<div style="float:left;width:200px;">Submitted on 20 Dec2014</div>
					<!-- Type of programme -->
					<div style="float:right;width:200px;">Learn-to-play Programme</div>
					
				</div>
			</div>
		</div><!-- end div contain-->
	</div>
<!-- end tab request -->
<!-- Start tab endorsed -->
<div class="tab-pane" id="profile">			
</div>
<!-- End endorsed -->
</div>
