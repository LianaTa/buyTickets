<?php
date_default_timezone_set("UTC");
include('timetable.php');
$id=trim($_POST['id']);
?>
<option selected="selected">Выберите время:</option>
<?php
	for ($j = 0; $j < count ($timeBtoA[$id]); $j++){
?>
<option  data-id=" <?php echo $j; ?>" value="<?php echo $timeBtoA[$id][$j];?>"><?php echo date("H:i",$timeBtoA[$id][$j])?></option>
<?php 
	}
?>