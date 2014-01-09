(function($){
  // Start time for registration
  $('#star_time_registration').datetimepicker({           
   }); 
  // End time for registration
  $('#end_time_registration').datetimepicker({           
   });  
   //first_reminder 
   $('#first_reminder').datetimepicker({           
   });  
    // second_reminder
   $('#second_reminder').datetimepicker({           
   });
   // button add other row
   $(document).on("click",".btn-add-other", function(){
      $(this).parent().after("<div class='row'>" 
                                +"<label class='col-md-5'><input type='text' class='form-control'></label>"
                                +"<button type='button' class='btn btn-success btn-add-other'><span class='glyphicon glyphicon-plus-sign'></span></button> "
                                +"<button type='button' class='btn btn-default btn-del-other'><span class='glyphicon glyphicon-trash'></span></button>"
                              +"</div>");    
   });
   // delete row other 
   $(document).on("click",".btn-del-other",function(){
      $(this).parent().remove();
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
  // delete certificate row
  $(document).on("click",".btn-del-certificate",function(){
      $(this).parent().remove();
  });
})(jQuery);