<?php
	$abcd=mysql_connect("localhost","root","");
	if($abcd)
	{
		echo "connected";	
	}
	else
	{
		echo "not connected";	
	}
	$q="create database if not exists aa;";
	$check=mysql_query($q);
	if($check)
	{
		echo "dataBASE created ";
	}
	else
	{
		echo "database not created";	
	}
	mysql_select_db("aa",$abcd);
	$ct="create table table1(rollno int,name varchar(10));";
	$checkk=mysql_query($ct);
	if($checkk)
	{
		echo "table created ";
	}
	else
	{
		echo "table not created";	
	}
	mysql_close($abcd);
?>