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
      <a href="<?php echo site_url('programme/addParticipantIndividual');?>"><button type="button" class="btn btn-default selected">Add participant</button></a>
      <a href="<?php echo site_url('programme/showAttendance');?>"><button type="button" class="btn btn-default">Attendance</button></a>
      <a href="<?php echo site_url('programme/availableForRegistration');?>"><button type="button" class="btn btn-default">Cancelation</button></a>
		</div> 	
	</div>
</div> 
<!-- end header -->
<!-- label Add participant -->
<div class="title" style="margin:15px;">ADD PARTICIPANT</div>
<div class="row"><!-- div row -->
  <div class="col-md-6">
    <table class="table table-bordered table-striped" style="margin-top:10px;">
        <tr>
          <th style="width:250px;">Fields</th>
          <th style="width:250px;"></th>
        </tr>
        <tr>
          <td>Indentity/Birth Certification No.</td>
          <td>
            <div class="form-group input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>                    
          </td>
        </tr>
        <!-- row first name -->
        <tr>
          <td>First Name</td>
          <td>
            <!-- <div class="col-md-12">
              <input type="text" class="form-control" >         
            </div> -->
            <input class="form-control">
          </td>
        </tr>
        <!-- row last name -->
        <tr>
          <td>Last Name</td>
          <td>
            <!-- <div class="col-md-12">
              <input type="text" class="form-control" >         
            </div> -->
            <input class="form-control">
          </td>
        </tr>
        <!-- row gender -->
        <tr>
          <td>Gender</td>
          <td>              
            <div class="form-group col-md-12">                    
                <label class="radio-inline">
                  <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked> Male
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">Female
                </label>                      
            </div>        
          </td>
        </tr>
        <!-- row Date of birth -->
        <tr>
          <td>Date of birth</td>
          <td>
            <!-- <div class="col-md-12">                           -->
                    <div class="input-group date datetimepicker startdatetimepicker" id="date_of_birth" style="width:60%;">
                        <input type="text"  class="form-control" name="started_at" data-format="DD/MM/YYYY" readonly="readonly" />
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>                 
            <!-- </div>           -->
          </td>
        </tr>
        <!-- Citizenship status -->
        <tr>
          <td>Citizenship status </td>
          <td>
            <!-- <div class="col-md-12">      -->
                <select class="form-control">          
                  <?php                   
                    foreach ($citizenship as $key)
                       echo "<option>".$key["name"]."</option>";
                  ?>                             
                </select>                        
            <!-- </div>           -->
          </td>
        </tr>
        <!-- Race -->
        <tr>
          <td>Race</td>
          <td>
            <!-- <div class="col-md-12">          -->
                 <select class="form-control">          
                  <?php                  
                    foreach ($race as $key)
                      echo "<option>".$key["name"]."</option>";
                  ?>                             
                </select>   
            <!-- </div>             -->
          </td>
        </tr>
        <!--Postal code -->
        <tr>
          <td>Postal code</td>
          <td>
            <!-- <div class="form-group">
              <div class="col-md-8">
                <input type="text" class="form-control" >         
              </div>  
              <div class="col-md-4">
                <button type="button" class="btn btn-default">Search</button>       
              </div>
            </div>    --> 
            <div class="form-group input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </td>
        </tr>
        <!--Street name-->
        <tr>
          <td>Street name</td>
          <td>
                      
        </td>
        </tr>
        <!--Unit No.-->
        <tr>
          <td>Unit No.</td>
          <td>
            <!-- <div class="col-md-12">
                <input type="text" class="form-control" >         
            </div>  -->
            <input class="form-control">           
        </td>
        </tr>
        <!--Building name-->
        <tr>
          <td>Building name</td>
          <td>
                      
        </td>
        </tr>
        <!--Mobile no.-->
        <tr>
          <td>Mobile no.</td>
          <td>
           <!--  <div class="col-md-12">
                <input type="text" class="form-control" >         
            </div>   -->   
            <input class="form-control">   
        </td>
        </tr>
        <!-- Email -->
         <tr>
            <td>Email</td>
            <td>
             <!--  <div class="col-md-12">
                  <input type="text" class="form-control" >         
              </div>   -->   
              <input class="form-control">   
            </td>
        </tr>
        <!--Pre-requisite-->
        <tr>
          <td>Pre-requisite</td>
          <td>
           <!--  <div class="form-group">
              <div class="col-md-1"> -->
                <input type="checkbox">By: Amin user
              <!-- </div>
               <div class="col-md-10">
                <p>By: Amin user</p>
              </div>
            </div> -->
        </td>
        </tr>   
        <!-- Decalaration-->
        <tr>
          <td>Decalaration</td>
          <td>
            <!-- <div class="form-group"> -->
              <!-- <div class="col-md-1"> -->
                <input type="checkbox">By: Amin user
              <!-- </div> -->
              <!-- <div class="col-md-10"> -->
                <!-- <p>By: Amin user</p> -->
              <!-- </div> -->
            <!-- </div>        -->
          </td>
        </tr>       
        <!--Mode of Payment-->
        <tr>
          <td>Mode of Payment</td>
          <td>
            <!-- <div class="col-md-12">          -->
            <select class="form-control">          
                <?php                  
                    foreach ($modeofpayment as $key)
                      echo "<option>".$key["name"]."</option>";
                  ?>                             
            </select>                        
          <!-- </div>           -->
        </td>
        </tr>
        <!--Reference no.-->
        <tr>
          <td>Reference no.</td>
          <td>
            <!-- <div class="col-md-12"> -->
                <input type="text" class="form-control" >         
            <!-- </div>         -->
        </td>
        </tr>
        <tr>
          <td colspan="2" style="text-align:center;">
            <a href="<?php echo site_url('programme/showAttendance');?>"><button type="button" class="btn" >Add Participant</button></a>
          </td>
        </tr>
    </table>
  </div>
</div>


