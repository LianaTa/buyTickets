<?php
date_default_timezone_set("UTC"); 
$trips = array( array("из А в В", 700),
                  array("из В в А", 700),
                  array("из А в В и обратно в А", 1200) 
                ); 

$finalPrice = 0;
$tripTime = mktime(0,50,0);
$trip_id =   $_REQUEST['direction'];
$direction = $trips[$trip_id][0];
$price =  $trips[$trip_id][1];
$ticketsNum =    $_REQUEST['number'];
$finalPrice = $price * $ticketsNum;
switch ($trip_id) {
	case '0':
		$startTime= $_REQUEST['trip1'];
		$stopTime = $startTime + $tripTime;
		echo "Вы выбрали ".$ticketsNum." билета по маршруту ".$direction." стоимостью ".$finalPrice."р.<br>";
		echo "Это путешествие займет у вас ".date("H:i",$tripTime)."минут.<br>"; 
		echo "Теплоход отправляется в ".date("H:i",$startTime).", а прибудет в ".date("H:i",$stopTime);
		break;
	case '1':
		$startTime= $_REQUEST['trip1'];
		$stopTime= $startTime + $tripTime;
		echo "Вы выбрали ".$ticketsNum." билета по маршруту ".$direction." стоимостью ".$finalPrice."р.<br>";
		echo "Это путешествие займет у вас ".date("H:i",$tripTime)."минут.<br>"; 
		echo "Теплоход отправляется в ".date("H:i",$startTime).", а прибудет в ".date("H:i",$stopTime);
		break;
	case '2':
		$startTimeAtoB = $_REQUEST['trip1'];
		$startTimeBtoA = $_REQUEST['trip2'];
		$stopTimeAtoB = $startTimeAtoB + $tripTime;
		$stopTimeBtoA = $startTimeBtoA + $tripTime;
		

		echo "Вы выбрали ".$ticketsNum." билета по маршруту ".$direction." стоимостью ".$finalPrice."р.<br>";
		echo "Теплоход  по маршруту из А в В отправляется в ".date("H:i",$startTimeAtoB)." , а прибудет в ".date("H:i",$stopTimeAtoB);
		echo "Теплоход  по маршруту из B в A отправляется в ".date("H:i",$startTimeBtoA)." , а прибудет в ".date("H:i",$stopTimeBtoA);
		$waitTime = $startTimeBtoA - $stopTimeAtoB;
		$tripTime = 2*$tripTime + $waitTime;
		echo "Это путешествие займет у вас ".date("H:i",$tripTime)."минут.<br>"; 

		break;
		
}

?>