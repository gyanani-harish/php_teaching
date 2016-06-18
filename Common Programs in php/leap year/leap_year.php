<?php
	$year=$_POST["year"];
	if ($year % 400==0 and $year%100==0 and $year%4==0)
	{
		echo "leap year";
	}
	else if($year % 400!=0 and $year%100==0 and $year%4==0)
	{
		echo "not leap year";
	}
	else if ($year % 400!=0 and $year%100!=0 and $year%4==0)
	{
		echo "Leap Year";
	}
	else if ($year % 400!=0 and $year%100!=0 and $year%4!=0)
	{
		echo " Not Leap Year";
	}
?>