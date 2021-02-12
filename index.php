<?php 

include('timetable.php');
date_default_timezone_set("UTC"); 
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
      			<select id = "user-direction" class="user-direction">
                  <option selected="selected">Выберите направление</option>
      				    <option value="0" >из A в B</option>
                	<option value="1">из B в A</option>
                	<option value="2">из A в B и обратно в А</option>
      			</select>
    		</p>
    		<p>
    			<label for="trip-time">Туда</label>
          <select name="trip-time" id = "trip1" class="trip1" data-id="0">
            <option selected="selected">Выберите время</option>
          </select>
        </p>
        <p id="trip2-time" class="hide trip2-time">
          <label for = "trip-time">Обратно</label>
          <select name="trip-time" id = "trip2" class="trip2" data-id="0">
            <option selected="selected">Выберите время</option>
          </select>
        </p>
          

    		<p>
      			<label for="tickets-num">Количество билетов</label>
      			<input id="tickets-num" type="text" value="1" name="tickets-num" >
    		</p>
          <input type="hidden" name="flag" id = "flag" value = "1">
        	<button class="btn btn--contact_form" type="submit">Посчитать</button>
	</form>
  <div id="orderResult"></div>
</body>
<script type="text/javascript" src = "functions.js"></script> 
</html>