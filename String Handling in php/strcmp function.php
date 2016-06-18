<?php
	$s="ramesh";
	$s2="   ramesh  ";
	$r=strcmp($s,$s2);
	if($r==0)
	{
		echo "same";
	}
	else if($r==1)
	{
		echo "not same";
	}
?>