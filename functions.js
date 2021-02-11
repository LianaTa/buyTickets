
timeFromAtoB = document.querySelector('#tripAtoB');
timeFromBtoA = document.querySelector('#tripBtoA');

const select1 = document.querySelector('#user-direction')
const select2 = document.querySelector('#tripAtoB');

select1.addEventListener('change', () => {
  switch(select1.value){
 	case "1": 
 				timeFromAtoB.classList.add('show');
 				timeFromBtoA.classList.add('hide');
 				break;
 	case "2": 
 			  timeFromAtoB.classList.add('hide');
 			  timeFromBtoA.classList.remove('hide');
 			  break;
 	case "3": 
 			  timeFromAtoB.classList.remove('hide');
 			  timeFromBtoA.classList.remove('hide');
 			  break;
 	}
});



$(document).ready(function(){
  $("#buyTicketsForm").submit(function(){
       $.ajax({
               type:"POST",
               url: "http://localhost/tickets/functions.php",
               data:{

                     "direction":$('#user-direction').val(),
                     "timeAtoB":$('#tripAtoB').val(),
                     "timeBtoA":$('#tripBtoA').val(),
                 	 "number": $('#tickets-num').val()
                    },  
                success: function(html){
                    $("#orderResult").html(html);
                    
                   }
              });
            return false;
          });
 });