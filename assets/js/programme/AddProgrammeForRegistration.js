(function($){
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
// add more leader
  $(".btn-add-leader").click(function(){
      $("#table-activiy-leader").append("<tr>"
                                          +"<td><input type='text' class='form-control leader-name'></td>"
                                          +"<td><input type='text' class='form-control accreditation'></td>"
                                          +"<td>"
                                            +"<div class='row' style='margin:0px;'>"
                                              +"<button type='button' class='btn btn-default btn-edit-leader'><span class='glyphicon glyphicon-pencil'></span></button> "
                                              +"<button type='button' class='btn btn-default btn-del-leader'><span class='glyphicon glyphicon-trash'></span></button>"              
                                            +"</div>"
                                          +"</td>"
                                        +"</tr>");

  });
  //delete leader
  $(document).on("click",".btn-del-leader",function(){
    var current_row = $(this).parent().parent().parent();
    var leader_name = current_row.find("td").find(".leader-name").val();
    var accreditation = current_row.find("td").find(".accreditation").val();
    if(leader_name==""&& accreditation=="")
    {
      current_row.remove();
    }
    else
    {
        $("#dialog-confirm-del-leader").modal("show");
        $("#del-leader-yes").click(function(){
           current_row.remove();
          $("#dialog-confirm-del-leader").modal("hide");     
        });
    }
  });
  //edit leader
  $(document).on("click",".btn-edit-leader",function(){
    var current_row = $(this).parent().parent().parent();
    var leader_name =  current_row.find("td").find(".leader-name");
    var accreditation =  current_row.find("td").find(".accreditation");

    status = $(this).attr("id");    
    if(status==1)
    {
      //alert(status);
      //disables all edit button
      $(".btn-edit-leader").addClass("disabled");
      //enable current button
      $(this).removeClass("disabled");
      // change icon
      $(this).find("span").removeClass("glyphicon-pencil");
      $(this).find("span").addClass("glyphicon-floppy-disk");
      //end change icon
      leader_name.prop("disabled",false);
      accreditation.prop("disabled",false);
     
      // $(".btn-edit-participant-group").addClass("disabled");
      $(this).attr("id",0);

    }
    else
    {
      //alert(status);
      //enable all edit button
      $(".btn-edit-leader").removeClass("disabled");
      //change icon
      $(this).find("span").removeClass("glyphicon-floppy-disk");
      $(this).find("span").addClass("glyphicon-pencil");
    
      //end chaneg icon
      leader_name.prop("disabled",true);
      accreditation.prop("disabled",true);

      $(this).attr("id",1);
    }     

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