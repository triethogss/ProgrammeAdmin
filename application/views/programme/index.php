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
<!-- header -->
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
					<?php                   
                      foreach ($opentopublic as $key)
                         echo "<option>".$key["name"]."</option>";
                    ?> 
				</select>
			</div>
		</div>
		<!-- By category -->
		<div class="col-md-3">
			<div >
				<select class="form-control">
					<?php                   
                      foreach ($category as $key)
                         echo "<option>".$key["name"]."</option>";
                    ?>
				</select>
			</div>
		</div>
		<!-- By Activity type -->
		<div class="col-md-3">
			<div >
				<select class="form-control">
					<?php                   
                      foreach ($activity as $key)
                         echo "<option>".$key["name"]."</option>";
                    ?>
				</select>
			</div>
		</div>
		<!-- By venue -->
		<div class="col-md-3">
			<div >
				<select class="form-control">
					<?php                   
                      foreach ($venue as $key)
                         echo "<option>".$key["name"]."</option>";
                    ?>
				</select>
			</div>
		</div>
	</div>
</div>
<!-- end header -->
<!-- star div contain -->
<div style="margin:10px;">
	<div style='border-bottom:3px solid #cccccc;margin-top:20px;width:90%;'>
		<div style="width:100%;height:35px;">
			<!-- Name of programme -->
			<div style="float:left;"><a class="link" href='<?php echo site_url('programme/detailOfAvailableProgramme');?>'>Learn-to-Play Badminton</a> </div>
			<!-- Icon Delete --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>
			<!-- Icon Copy --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-file"></span></button></div>
			<!-- Icon Edit -->
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
		</div>
		<div style="width:100%;height:25px;">
			<!-- date submmit -->
			<div style="float:left;width:200px;">2 Jan- 25 Jan 2014</div>
			<!-- Type of programme -->
			<div style="float:right;width:200px;">Learn-to-play Programme</div>
			
		</div>
	</div>
	<div style='border-bottom:3px solid #cccccc;margin-top:20px;width:90%;'>
		<div style="width:100%;height:35px;">
			<!-- Name of programme -->
			<div style="float:left;"><a class="link" href='<?php echo site_url('programme/detailOfAvailableProgramme');?>'>Learn-to-Swim</a> </div>
			<!-- Icon Delete --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>
			<!-- Icon Copy --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-file"></span></button></div>
			<!-- Icon Edit -->
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
		</div>
		<div style="width:100%;height:25px;">
			<!-- date submmit -->
			<div style="float:left;width:200px;">2 Jan- 31 Jan 2014</div>
			<!-- Type of programme -->
			<div style="float:right;width:200px;">Learn-to-play Programme</div>
			
		</div>
	</div>
	<div style='border-bottom:3px solid #cccccc;margin-top:20px;width:90%;'>
		<div style="width:100%;height:35px;">
			<!-- Name of programme -->
			<div style="float:left;"><a class="link" href='<?php echo site_url('programme/detailOfRequestProgramme');?>'>Health talk</a> </div>
			<!-- Icon Delete --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>
			<!-- Icon Copy --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-file"></span></button></div>
			<!-- Icon Edit -->
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
		</div>
		<div style="width:100%;height:25px;">
			<!-- date submmit -->
			<div style="float:left;width:200px;">2 Feb- 9 Feb 2014</div>
			<!-- Type of programme -->
			<div style="float:right;width:200px;">Social Activities</div>
			
		</div>
	</div>
		<div style='border-bottom:3px solid #cccccc;margin-top:20px;width:90%;'>
		<div style="width:100%;height:35px;">
			<!-- Name of programme -->
			<div style="float:left;"><a class="link" href='<?php echo site_url('programme/detailOfRequestProgramme');?>'>Aerobics Dance</a> </div>
			<!-- Icon Delete --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>
			<!-- Icon Copy --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-file"></span></button></div>
			<!-- Icon Edit -->
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
		</div>
		<div style="width:100%;height:25px;">
			<!-- date submmit -->
			<div style="float:left;width:200px;">11 Feb- 25 Feb 2014</div>
			<!-- Type of programme -->
			<div style="float:right;width:200px;">Sport Interest Group Activities</div>
			
		</div>
	</div>
	<div style='border-bottom:3px solid #cccccc;margin-top:20px;width:90%;'>
		<div style="width:100%;height:35px;">
			<!-- Name of programme -->
			<div style="float:left;"><a class="link" href='<?php echo site_url('programme/detailOfRequestProgramme');?>'>Learn-to-Play Badminton</a> </div>
			<!-- Icon Delete --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></div>
			<!-- Icon Copy --> 
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-file"></span></button></div>
			<!-- Icon Edit -->
			<div style="float:right;width:50px;"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></div>
		</div>
		<div style="width:100%;height:25px;">
			<!-- date submmit -->
			<div style="float:left;width:200px;">1 Mar- 31 Mar 2014</div>
			<!-- Type of programme -->
			<div style="float:right;width:200px;">Learn-to-play Programme</div>
			
		</div>
	</div>	
</div>
<!-- end div contain -->