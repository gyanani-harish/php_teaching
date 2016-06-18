<?php
	$input=$_POST["txt1"];
	$seconds=$input%60;
	$minutes=intval($input/60);
	echo $minutes." minutes<br />";
	echo $seconds." seconds";
?>
