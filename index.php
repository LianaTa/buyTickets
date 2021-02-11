<?php
 
date_default_timezone_set("UTC"); 

$trip1 =  array(mktime(18,00,0),mktime(18,30,0),mktime(18,45,0),mktime(19,00,0),mktime(19,15,0),mktime(21,00,0));

$trip2 =  array(mktime(18,30,0),mktime(18,45,0),mktime(19,00,0),mktime(19,15,0),mktime(19,35,0),mktime(21,50,0),mktime(21,55,0));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<title>buytickets</title>
</head>
<body>
	<form id = "buyTicketsForm">
			<p>
      			<label for="user-direction">Направление</label>
      			<select id = "user-direction">
      				    <option value="1" selected="selected">из A в B</option>
                	<option value="2">из B в A</option>
                	<option value="3">из A в B и обратно в А</option>
      			</select>
    		</p>
    		<p>
    			<label for="trip-time">Выберите время</label>
				  <select name="time" id="tripAtoB">
					<?php
						for($i=0;$i<count($trip1);$i++){
							echo "<option value='".$trip1[$i]."'>".date('H-i',$trip1[$i])."(из А в В)</option>";
						}

					?>
          </p>
				  </select>
          <select name="time" id="tripBtoA" class="hide">
          <p>
          <?php
            
           for($i=0;$i<count($trip2);$i++){
              
              echo "<option value='".$trip2[$i]."'>".date('H-i',$trip2[$i])."(из B в A)</option>";
            }

          ?>
          </p>
          </select>

    		<p>
      			<label for="tickets-num">Количество билетов</label>
      			<input id="tickets-num" type="text" value="1" name="tickets-num" >
    		</p>
        	<button class="btn btn--contact_form" type="submit">Посчитать</button>
	</form>
  <div id="orderResult"></div>
</body>
<script type="text/javascript" src = "functions.js"></script> 
</html>