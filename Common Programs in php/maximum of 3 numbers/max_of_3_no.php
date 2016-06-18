<?php
	$ritu = $_POST["txt1"];
	$aarti = $_POST["txt2"];
	$nishi = $_POST["txt3"];
	if($ritu>$aarti && $ritu>$nishi)
	{
		echo $ritu;
	}
	else if($aarti>$ritu && $aarti>$nishi)
	{
		echo $aarti;
	}
	else if($nishi>$ritu && $nishi>$aarti)
	{
		echo $nishi;
	}

?>
