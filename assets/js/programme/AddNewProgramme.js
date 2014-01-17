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


	//add leader
	$(document).on("click",".btn-add-leader",function(){
		$temp = $("#select-list-leader").html();		
		$(this).parent().parent().parent().parent().after("<div class='row'>"
																+"<div class='col-md-6'>"
																	+"<div class='form-group'>"
																		+"<!-- label  List Activity Leader ... -->"
																	    +"<label class='col-md-4 control-label'></label>"
																	    +"<!-- select activity leader -->"
																	    +"<div class='col-md-6'>"
																			+"<select class='form-control' style='width:100%;'>"+
																			  $temp
																			+"</select>"
																	    +"</div>"
																	    +"<!-- button plus -->"
																	    +"<div class='col-md-1'><button type='button' class='btn btn-success btn-add-leader'><span class='glyphicon glyphicon-plus-sign'></span></button></div>"
																	    +"<!-- button trash -->"
																	    +"<div class='col-md-1'><button type='button' class='btn btn-default btn-delete-leader'><span class='glyphicon glyphicon-trash'></span></button></div>"
															 		 +"</div>"
																+"</div>"
															+"</div>");

       
	});
	// delete last leader
	$(".del-last-leader").click(function(){
		$(".btn-delete-leader:last").parent().parent().parent().remove();
	});
	// delete leader
	$(document).on("click",".btn-delete-leader",function(){		
		$(this).parent().parent().parent().remove();		
	});
	//add condition
	$(document).on("click",".btn-add-condition",function(){	
		$temp = $("#select-additional-resources").html();
		$(this).parent().parent().parent().parent().after("<div class='row'>"
																+"<div class='col-md-6'>"
																	+"<div class='form-group'>"
																		+"<!-- label  condition ... -->"
																	    +"<label class='col-md-4 control-label'></label>"
																	    +"<!-- select condition -->"
																	    +"<div class='col-md-6'>"
																			+"<select class='form-control' style='width:100%;'>"+
																			 $temp
																			+"</select>"
																	    +"</div>"
																	    +"<!-- button plus -->"
																	    +"<div class='col-md-1'><button type='button' class='btn btn-success btn-add-condition'><span class='glyphicon glyphicon-plus-sign'></span></button></div>"
																	    +"<!-- button trash -->"
																	    +"<div class='col-md-1'><button type='button' class='btn btn-default btn-delete-condition'><span class='glyphicon glyphicon-trash'></span></button></div>"
															 		 +"</div>"
																+"</div>"
															+"</div>");

	});
	// delete last condition
	$(".del-last-condition").click(function(){
		$(".btn-delete-condition:last").parent().parent().parent().remove();
	});
	// delete conditon
	$(document).on("click",".btn-delete-condition",function(){		
		$(this).parent().parent().parent().remove();		
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

  
})(jQuery);