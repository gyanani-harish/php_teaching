<?php
 	$rt=mysql_connect("localhost","root","");
	if($rt)
	{
		echo "success";	
	}	
	else
	{
		echo "unable to connect";
	}



	$u="create database aarti5";
	$y=mysql_query($u,$rt);
	if($y)
	{
		echo "<br /> database created";	
	}
	else
	{
		echo "<br /> database not created";	
	}




mysql_close($rt);
?>