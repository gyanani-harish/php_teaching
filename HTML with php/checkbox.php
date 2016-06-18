<?php
	$abc= $_POST["vehicle"];
	foreach($abc as &$value)
	{
		echo $value."<br />";
	}
?>