<?php
	$n1=$_POST["num1"];
	$n2=$_POST["num2"];
	if($n1==$n2)
	{
		echo "both are equal";
	}
	else if($n1>$n2)
	{
		echo "1st number is greater";
	}
	else if($n1<$n2)
	{
		echo "2nd number is greater";
	}
?>