(function($){
	//timepicker
	$("#duration-of-session").datetimepicker({
		 pickDate: false,  
		 language:'ru',		
		
	});
	//end timepicker
	//select activity
	$("#select-activity").change(function(){

	});

	$("#btn-add-sessions").click(function(){
		$("#table-session").find("tbody").append("<tr>"
										+"<td><input type='text' class='form-control row-session' ></td>"
										+"<td><input type='text' class='form-control row-description'></td>"
										+"<td><button type='button' class='form-control button-delete-session'><span class='glyphicon glyphicon-trash'></span></button></td>"
									+"</tr>");
		//alert("Hello");
	});

	// event when click button delete sessions
	$(document).on("click",".button-delete-session",function(){	
		var sessions = $(this).parent().parent().find("td").find(".row-session");
		var discription = $(this).parent().parent().find("td").find(".row-description");
		var current_row = $(this).parent().parent();
		if(sessions.val()=="" && discription.val()=="")
		{
			current_row.remove();
		}
		else
		{
			$("#dialog-confirm-del-session").modal("show");
			$("#del-session-yes").click(function(){
				current_row.remove();
				$("#dialog-confirm-del-session").modal("hide");			
			});
		}
		//$(this).parent().parent().remove();
	});
	//add Target Audience	
	$(document).on("click",".btn-add-target-audience",function(){
		$temp = $("#select-target-audience").html();	
		$(this).parent().parent().parent().parent().after("<div class='row'>"
																+"<div class='col-md-6'>"
																	+"<div class='form-group'>"
																		+"<!-- label target audience -->"
																	    +"<label class='col-md-4 control-label'></label>"
																	    +"<!-- select activity type -->"
																	    +"<div class='col-md-6'>"
																			+"<select class='form-control' style='width:100%;'>"+
																			  $temp																 
																			+"</select>"
																	    +"</div>"
																	    +"<!-- button (+) -->"
																	    +"<div class='col-md-1'><button type='button' class='btn btn-success btn-add-target-audience'><span class='glyphicon glyphicon-plus-sign'></span></button></div>"
																	    +"<div class='col-md-1'><button type='button' class='btn btn-default btn-del-target-audience'><span class='glyphicon glyphicon-trash'></span></button></div>"
																    +"</div>"
																+"</div>"
															+"</div>");

	});
	// delete last target audience
	$(".del-last-target-audience").click(function(){
		$(".btn-del-target-audience:last").parent().parent().parent().parent().remove();		
	});
	// delete target audience
	$(document).on("click",".btn-del-target-audience",function(){		
		$(this).parent().parent().parent().parent().remove();		
	});
	// add row of programme fee per cost
	$(document).on("click",".btn-add-cost",function(){
		$(this).parent().parent().after("<tr>"
											+"<td><input type='text' class='form-control row-group-tb-cost' ></td>"
											+"<td><input type='number' min='0' value='0' class='form-control row-fee-tb-cost' ></td>"
											+"<td>"
												+"<select class='form-control'>"
													+"<option>By Amount</option>"
													+"<option>By Percent</option>"
												+"</select>"
											+"</td>"
											+"<td><input type='number'  min='0' value='0' class='form-control row-cost-tb-cost' ></td>"
											+"<td><input type='number'  min='0' value='0' class='form-control row-cost-tb-cost' ></td>"
											+"<td></td>"
											+"<td></td>"
											+"<td style='width:110px;text-align:center;'>"
						    					+"<button type='button' class='btn btn-success btn-add-cost'><span class='glyphicon glyphicon-plus-sign'></span></button> "
										    	+"<button type='button' class='btn btn-default btn-del-cost'><span class='glyphicon glyphicon-trash'></span></button>"
						    				+"</td>"
										+"</tr>");
	});
	//delete last row of table fee per cost
	$(".btn-del-last-cost").click(function(){
		$(".btn-del-cost:last").parent().parent().remove();
	});
	//delete row of table fee per cost
	$(document).on("click",".btn-del-cost",function(){
		$(this).parent().parent().remove();
	});
	// add row of table addional resources...
	$("#btn-add-additional-resources").click(function(){
		$("#table-additional-resources").find("tbody").append("<tr>"
																	+"<td><input type='text' class='form-control row-item-tb-res' ></td>"
																	+"<td><input type='text' class='form-control row-unit-tb-res' ></td>"
																	+"<td><input type='text' class='form-control row-cost-tb-res' ></td>"
																	+"<td><input type='text' class='form-control row-remark-tb-res' ></td>"
																	+"<td><button type='button' class='form-control btn-del-additional-resources'><span class='glyphicon glyphicon-trash'></span></td>"						
																+"</tr>");
	});
	// button delete row of table-additional-resources
	$(document).on("click",".btn-del-additional-resources",function(){
		var current_row = $(this).parent().parent();
		var item = current_row.find("td").find(".row-item-tb-res").val();
		var unit = current_row.find("td").find(".row-unit-tb-res").val();
		var cost = current_row.find("td").find(".row-cost-tb-res").val();
		var remark = current_row.find("td").find(".row-remark-tb-res").val();
		if(item == "" && unit =="" && cost=="" && remark=="")
		{
			current_row.remove();
		}
		else
		{
			$("#dialog-confirm-del-add-res").modal("show");
			$("#del-resources-yes").click(function(){
				current_row.remove();
				$("#dialog-confirm-del-add-res").modal("hide");			
			});
		}
	});
// ---------------------------------------------------- break page -----------------------------------------
// datetimepicker
  $("#star_time_registration").datetimepicker({
     language:'ru',
  });
  $("#end_time_registration").datetimepicker({
     language:'ru',
  });
  $("#event-reminder").datetimepicker({
    language:'ru',
  });
  $("#first_reminder").datetimepicker({
     language:'ru',
  });
  $("#second_reminder").datetimepicker({
     language:'ru',
  });
  // end datetimepicker
  
  // add new session
  $(document).on("click",".btn-add-session",function(){
    var current_row = $(this).parent().parent().parent();
    current_row.after("<tr>"
              +"<td><input type='text' class='form-control tb-ses-row-date'></td>"
              +"<td><input type='text' class='form-control tb-ses-row-start-time'></td>"
              +"<td><input type='text' class='form-control tb-ses-row-end-time'></td>"
              +"<td><input type='text' class='form-control tb-ses-row-sub-venue'></td>"
              +"<td><input type='text' class='form-control tb-ses-row-code'></td>"
              +"<td><input type='text' class='form-control tb-ses-row-revenue'></td>"
              +"<td>"             
                +"<div style='width:130px;'>"
                    +"<a href=''><button type='button' class='btn btn-default btn-edit-session'><span class='glyphicon glyphicon-pencil'></span></button></a> "
                    +"<button type='button' class='btn btn-default btn-del-session'><span class='glyphicon glyphicon-trash'></span></button> "            
                    +"<button type='button' class='btn btn-success btn-add-session'><span class='glyphicon glyphicon-plus-sign'></span></button> "               
                 +"</div>"
              +"</td>"
            +"</tr>");
  });
// delete session
  $(document).on("click",".btn-del-session",function(){
      var current_row = $(this).parent().parent().parent();
      var date = current_row.find("td").find(".tb-ses-row-date").val();
      var start_time = current_row.find("td").find(".tb-ses-row-start-time").val();
      var end_time = current_row.find("td").find(".tb-ses-row-end-time").val();
      var sub_venue = current_row.find("td").find(".tb-ses-row-sub-venue").val();
      var code = current_row.find("td").find(".tb-ses-row-code").val();
      var revenue = current_row.find("td").find(".tb-ses-row-revenue").val();
      // check empty
      if(date=="" && start_time=="" && end_time =="" && sub_venue=="" && code=="" && revenue=="")
      {
        current_row.remove();
      }
      else
      {
        $("#dialog-confirm-del-session").modal("show");
        $("#del-session-yes").click(function(){
           current_row.remove();
          $("#dialog-confirm-del-session").modal("hide");     
        });
      }
      
  });
  //delete last session
  $(".btn-del-last-session").click(function(){
      var current_row = $(".btn-del-session:last").parent().parent().parent();
      var date = current_row.find("td").find(".tb-ses-row-date").val();
      var start_time = current_row.find("td").find(".tb-ses-row-start-time").val();
      var end_time = current_row.find("td").find(".tb-ses-row-end-time").val();
      var sub_venue = current_row.find("td").find(".tb-ses-row-sub-venue").val();
      var code = current_row.find("td").find(".tb-ses-row-code").val();
      var revenue = current_row.find("td").find(".tb-ses-row-revenue").val();
      if($(".btn-del-session").length>0)
      {
            if(date=="" && start_time=="" && end_time =="" && sub_venue=="" && code=="" && revenue=="")
              {
                current_row.remove();
              }
              else
              {
                $("#dialog-confirm-del-session").modal("show");
                $("#del-session-yes").click(function(){
                   current_row.remove();
                  $("#dialog-confirm-del-session").modal("hide");     
                });
              }
      }


      // current_row.remove();
  });
   // button add other row
   $(document).on("click",".btn-add-other", function(){
      $(this).parent().after("<div class='row'>" 
                                +"<label class='col-md-5'><input type='text' class='form-control input-other'></label>"
                                +"<button type='button' class='btn btn-success btn-add-other'><span class='glyphicon glyphicon-plus-sign'></span></button> "
                                +"<button type='button' class='btn btn-default btn-del-other'><span class='glyphicon glyphicon-trash'></span></button>"
                              +"</div>");    
   });
   // delete last other
   $(".btn-del-last-other").click(function(){
      var current_row = $(".btn-del-other:last").parent();
      var input_other = current_row.find("label").find(".input-other").val();
      var input_number = $(".input-other").length;
      if(input_number>1)
      {
          if(input_other=="" )
            {
              current_row.remove();
            }
          else
            {        
              $("#dialog-confirm-del-other").modal("show");
              $("#del-other-yes").click(function(){
                 current_row.remove();
                $("#dialog-confirm-del-other").modal("hide");     
              });
            }
       }
      
   });
   // delete row other 
   $(document).on("click",".btn-del-other",function(){
      var current_row = $(this).parent();
      var input_other = current_row.find("label").find(".input-other").val();
      if(input_other=="")
      {
        current_row.remove();
      }
      else
      {        
        $("#dialog-confirm-del-other").modal("show");
        $("#del-other-yes").click(function(){
           current_row.remove();
          $("#dialog-confirm-del-other").modal("hide");     
        });
      }
   });
   // add new row of table programme fee
   $(document).on("click",".btn-add-row-tb-programme-fee",function(){
      $select_audience_type = $("#td-select-audience-type").html();
      $select_rate = $("#td-select-rate").html();
      $(this).parent().parent().after("<tr>"
                                          +"<td>"+
                                            $select_audience_type
                                          +"</td><td>"+
                                            $select_rate
                                          +"</td><td style='width:110px;text-align:center;'>"
                                            +"<button type='button' class='btn btn-success btn-add-row-tb-programme-fee'><span class='glyphicon glyphicon-plus-sign'></span></button> "
                                            +"<button type='button' class='btn btn-default btn-del-row-tb-programme-fee'><span class='glyphicon glyphicon-trash'></span></button>"
                                          +"</td>"
                                      +"</tr>");
   });
  // delete last row table programme fee
  $(".btn-del-last-row-tb-prog-fee").click(function(){
      $(".btn-del-row-tb-programme-fee:last").parent().parent().remove();
  });
  // delete row of table programme fee
  $(document).on("click",".btn-del-row-tb-programme-fee",function(){
      $(this).parent().parent().remove();
  });
  // add more declaration
  $(document).on("click",".btn-add-declaration",function(){
      $select_declaration = $("#select-declaration-container").html();
      $(this).parent().after("<div class='row'>"+
                                  $select_declaration
                                +"<button type='button' class='btn btn-success btn-add-declaration'><span class='glyphicon glyphicon-plus-sign'></span></button> "
                                +"<button type='button' class='btn btn-default btn-del-declatarion'><span class='glyphicon glyphicon-trash'></span></button>"
                              +"</div>");
  });
  // delete last declaration 
  $(".btn-del-last-declaration").click(function(){
       $(".btn-del-declatarion:last").parent().remove();
  });
  // delete declaration row
  $(document).on("click",".btn-del-declatarion",function(){
      $(this).parent().remove();
  });
  // add more certificate
  $(document).on("click",".btn-add-certificate",function(){
      $select_certificate = $("#select-certificate-container").html();
      $(this).parent().after("<div class='row'>"+
                                  $select_certificate
                                +"<button type='button' class='btn btn-success btn-add-certificate'><span class='glyphicon glyphicon-plus-sign'></span></button> "
                                +"<button type='button' class='btn btn-default btn-del-certificate'><span class='glyphicon glyphicon-trash'></span></button>"
                              +"</div>");
  });
  // delete last certificate
  $(".btn-del-last-certificate").click(function(){
       $(".btn-del-certificate:last").parent().remove();
  });
  // delete certificate row
  $(document).on("click",".btn-del-certificate",function(){
      $(this).parent().remove();
  });

  // add more tag word
  $(document).on("click",".btn-add-tag-word",function(){
      $select_certificate = $("#select-tag-word-container").html();
      $(this).parent().after("<div class='row'>"+
                                  $select_certificate
                                +"<button type='button' class='btn btn-success btn-add-tag-word'><span class='glyphicon glyphicon-plus-sign'></span></button> "
                                +"<button type='button' class='btn btn-default btn-del-tag-word'><span class='glyphicon glyphicon-trash'></span></button>"
                              +"</div>");
  });
  // delete last tag word
  $(".btn-del-last-tag-word").click(function(){
       $(".btn-del-tag-word:last").parent().remove();
  });
  // delete tag word row
  $(document).on("click",".btn-del-tag-word",function(){
      $(this).parent().remove();
  });

  // add more discount scheme
  $(document).on("click",".btn-add-scheme",function(){
      $select_certificate = $("#select-scheme-container").html();
      $(this).parent().after("<div class='row'>"+
                                  $select_certificate
                                +"<button type='button' class='btn btn-success btn-add-scheme'><span class='glyphicon glyphicon-plus-sign'></span></button> "
                                +"<button type='button' class='btn btn-default btn-del-scheme'><span class='glyphicon glyphicon-trash'></span></button>"
                              +"</div>");
  });
  // delete last tag word
  $(".btn-del-last-scheme").click(function(){
       $(".btn-del-scheme:last").parent().remove();
  });
  // delete tag word row
  $(document).on("click",".btn-del-scheme",function(){
      $(this).parent().remove();
  });

  
})(jQuery);