$(document).ready(function(){
  $(".user-direction").change(function()
  {
    var id=$(this).val();
    if(id ==2){$('#flag').val(0);}else {$('#flag').val(1);$(".trip2-time").addClass("hide")}
    var dataString = 'id='+ id;
  
    $.ajax
    ({
      type: "POST",
      url: "gettimetable.php",
      data: dataString,
      success: function(html)
      {
        $(".trip1").html(html);
      } 
    });
  });

  $(".trip1").change(function()
  {
    var flag = $('#flag').val();
    if (flag==0){
          $(".trip2-time").removeClass("hide");
          var id=$(this ).parent().find('option:selected').data('id');
          var dataString = 'id='+ id;
  
          $.ajax
          ({
              type: "POST",
              url: "timeBtoA.php",
              data: dataString,
              success: function(html)
              {
                $(".trip2").html(html);
              } 
          });
      }else{$(".trip2-time").addClass("hide");}


  });



  $("#buyTicketsForm").submit(function(){
       
       $.ajax({
               type:"POST",
               url: "functions.php",
               data:{

                     "direction":$('#user-direction').val(),
                     "trip1":$('#trip1').val(),
                     "trip2":$('#trip2').val(),
                 	   "number": $('#tickets-num').val()
                    },  
                success: function(html){
                    $("#orderResult").html(html);
                    
                   }
              });
            return false;
          });
 });