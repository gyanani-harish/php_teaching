<?php
	$n=$_POST["txt1"];
	$sum=0;
	for($i=1;$i<=$n;$i++)
	{
		$sum=$sum+$i;
	}
	echo $sum;
?>