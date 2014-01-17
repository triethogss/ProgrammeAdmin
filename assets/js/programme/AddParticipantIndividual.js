(function($){
  $(function () {
    $('#myTab a:first').tab('show')
  });
  // Date of birth
  $(function () {
                $('#date_of_birth').datetimepicker({
                	pickTime: false,   
                });
            });
  // add more resources
  $(document).on("click",".btn-add-resources",function(){
  	$(this).parent().parent().after("<div class='row' style='margin-left:0px;margin-bottom:5px;'>"
						                  +"<div class='col-md-8' style='padding-left:0px;'>"
						                    +"<select class='form-control' style='width:100%;'>"
						                      +"<option>Item 1</option>"
						                      +"<option>Item 2</option>"
						                    +"</select>" 
						                  +"</div>" 
						                  +"<div>"         
						                    +"<button type='button' class='btn btn-default btn-add-resources'><span class='glyphicon glyphicon-plus-sign'></span></button> "
						                    +"<button type='button' class='btn btn-default btn-del-resources'><span class='glyphicon glyphicon-trash'></span></button>"
						                  +"</div>" 
						              +"</div>");
  });
  // delete resources
  $(document).on("click",".btn-del-resources",function(){
  	$(this).parent().parent().remove();
  });
  // delete last resources
  $(".btn-del-last-resources").click(function(){
  	$(".btn-del-resources:last").parent().parent().remove();

  });
})(jQuery);