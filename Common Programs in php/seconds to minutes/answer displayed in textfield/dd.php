<?php
	$input=$_POST["txt1"];
	$seconds=$input%60;
	$minutes=((int)($input/60));
	echo "Minutes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seconds<br />";
	echo "<input type='text' value='$minutes' />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<input type='text' value='$seconds' />";
?>
