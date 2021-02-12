<?php
date_default_timezone_set("UTC");
include('timetable.php');
$id=trim($_POST['id']);
?>
<option selected="selected">Выберите время:</option>
<?php
if ($id!=2){
	for ($j = 0; $j < count ($timetable[$id]); $j++){
?>
<option  data-id=" <?php echo $j; ?>" value="<?php echo $timetable[$id][$j];?>"><?php echo date("H:i",$timetable[$id][$j])?></option>
<?php 
	}
}else{ 
	for ($j = 0; $j < count ($timetable[0]); $j++){ ?>
		<option  data-id=" <?php echo $j; ?>" value="<?php echo $timetable[0][$j];?>"><?php echo date("H:i",$timetable[0][$j])?></option>

	<?php }

}

?>