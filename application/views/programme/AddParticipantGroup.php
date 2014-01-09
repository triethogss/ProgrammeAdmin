<!-- Add participant group -->
<!-- Add participant individual -->
<style>
	.title
	{
		font-weight: bold;
	}
    .selected
    {
        background-color: #95bcf2;
    }
</style>
<!-- header -->
<div class="row" style="border-bottom:2px solid #cccccc;">
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
          <a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default selected">Add participant</button></a>
          <a href="<?php echo site_url('programme/showAttendance');?>"><button type="button" class="btn btn-default ">Attendance</button></a>
          <a href="<?php echo site_url('programme/availableForRegistration');?>"><button type="button" class="btn btn-default">Cancelation</button></a>
		</div> 	
	</div>
</div> <!-- end header -->
<!-- label Add participant -->
<div class="title">Add participant</div>
<!-- start div container table -->
<div class="row" style="padding:10px;">
    <div class="col-md-5">
         <table class="table table-bordered table-striped">
                <tr>
                    <th style="width:50%;">Fields</th>
                    <th style="width:50%;"></th>
                </tr>
                <!-- Row Group Name -->
                <tr>                    
                    <td>Group Name</td>
                    <td>
                        <div class="form-group input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                         </div>
                    </td>
                </tr>
                <!-- Row ROC No. -->
                <tr>
                    <td>ROC No.</td>
                    <td>
                        <div class="form-group input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </td>
                </tr>
                <!-- No. of applicant -->
                <tr>
                    <td>No. of applicant</td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control">                           
                        </div>
                    </td>
                </tr>
                <!-- No. of applicant -->
                <tr>
                    <td>Payment method</td>
                    <td>
                        <div class="form-group">                          
                            <select class="form-control">
                                <?php                   
                                  foreach ($paymenmethod as $key)
                                     echo "<option>".$key["name"]."</option>";
                                ?>                             
                            </select>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- end div container table -->
    <div class="row">
        <div class="col-md-2">
            <button type="button" class="btn btn-default">Download Template</button>
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-default">Upload File</button>
        </div>
        <div class="col-md-3">
               
                <input type="file">
        </div>
    </div>
    <!-- table participant -->
    <div class="row" style="margin:10px;">
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr>
                    <td style="width:20%">Name</td>
                    <td style="width:20%">Mobile No.</td>
                    <td >Email</td>
                    <td style="width:20%">Select</td>
                </tr>
                <tr>
                    <td>Alvin Ang</td>
                    <td>99887766</td>
                    <td>Alvin@gmail.com</td>
                    <td>
                        <input type="checkbox">
                    </td>
                </tr>           
                <tr>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control">                           
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control">                           
                        </div>
                    </td>
                    <td>

                        <div class="form-group">
                            <input type="text" class="form-control">                           
                        </div>          
                    </td>
                    <td>
                        <input type="checkbox">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- button delete ... -->
    <div class="row" style="margin:10px;">
        <div class="col-md-4">
            <div class="btn-group">
                <button type="button" class="btn btn-default">Delete</button>
                <button type="button" class="btn btn-default checked">Add more participant</button>
                <button type="button" class="btn btn-default">Print invoice</button>        
            </div>
        </div>
    </div>
    <!-- button Register Paticipant(s) -->
    <div style="margin-left:auto;margin-right:auto;width:200px;">
            <a href="<?php echo site_url('programme/showparticipantgroup');?>" ><button type="button" class="btn btn-default">Register Participant(s)</button></a>
    </div>
 


