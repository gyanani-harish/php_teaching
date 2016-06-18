<?php
	$hindi=$_POST["txt1"];
	$english=$_POST["txt2"];
	$maths=$_POST["txt3"];
	$total=($hindi+$english+$maths);
	$per=($total/300)*100;
	echo "total is".$total;
	echo "\n percent is".$per;
?>