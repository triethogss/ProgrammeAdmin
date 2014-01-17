(function($){
  // $(function () {
  //   $('#myTab a:last').tab('show')
  // }); 
  	var $this = $(this);

	//add participant group
 	$("#btn-add-participant-group").click(function(){
 		$("#table-add-participant-group").append("<tr>"
								                    +"<td><div class='form-group'><input type='text' class='form-control'></div></td>"
								                    +"<td><div class='form-group'><input type='text' class='form-control'></div></td>"
								                    +"<td><div class='form-group'><input type='text' class='form-control'></div></td>"
								                    +"<td><input type='checkbox' class='checkbox-select-participant-group'></td>"
								                +"</tr>");

 	});

 	//delete row of table add participant group
 	$("#btn-del-participant-group").click(function(){
 		//$(".checkbox-select-participant-group").prop("checked").parent().parent().remove();
 		// $(".checkbox-select-participant-group").each(function(){
 		// 	if(this.checked)
 		// 	{
 		// 		$(this).parent().parent().remove();
 		// 	}
 		// });		
 		//alert("hello");
	        // $("#dialog-confirm-del-register-participant").modal("show");
	        // $("#del-par-reg-yes").click(function(){
	        //   $(".checkbox-select-participant-group:checked").parent().parent().remove();
	        //   $("#dialog-confirm-del-register-participant").modal("hide");     
	        // });
 	        if($(".checkbox-select-participant-group:checked").length>0)
 	        {
 	        	$("#dialog-confirm-del-register-participant").modal("show");
				$("#del-par-reg-yes").click(function(){
					$(".checkbox-select-participant-group:checked").parent().parent().remove();
					$("#dialog-confirm-del-register-participant").modal("hide");			
			});
	     
 	        }
 	        
 	});
 	
})(jQuery);