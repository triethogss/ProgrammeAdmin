(function($){
	$("#btn-add-sessions").click(function(){
		$("#table-session").find("tbody").append("<tr>"
										+"<td><input type='text' class='form-control row-session' ></td>"
										+"<td><input type='text' class='form-control row-description'></td>"
										+"<td><button type='button' class='form-control button-delete-session'><span class='glyphicon glyphicon-trash'></span></button></td>"
									+"</tr>");
		//alert("Hello");
	});

	// event when click button add sessions
	$(document).on("click",".button-delete-session",function(){		
		$(this).parent().parent().remove();
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
	// delete target audience
	$(document).on("click",".btn-del-target-audience",function(){		
		$(this).parent().parent().parent().parent().remove();		
	});
	// add row of table add cost
	$("#btn-add-cost").click(function(){
		$("#table-cost-per-pax").find("tbody").append("<tr>"
														+"<td><input type='text' class='form-control row-group-tb-cost' ></td>"
														+"<td><input type='text' class='form-control row-cost-tb-cost' ></td>"
														+"<td><input type='text' class='form-control row-remarks-tb-cost' ></td>"
														+"<td><button type='button' class='form-control btn-del-cost'><span class='glyphicon glyphicon-trash'></span></td>"
													 +"</tr>");
	});
	// button delete row of table-cost-per-pax
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
		$(this).parent().parent().remove();
	});

  
})(jQuery);