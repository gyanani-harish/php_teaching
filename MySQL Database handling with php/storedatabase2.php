<?php
 	
	/*
	algorithm to insert data in a table-
		1.  connect php with mysql
		2.  check it is connected or not
		2.5 taking value from html form and storing in a variable
		3.  write a query and store in a variable
		4.  select database where you want to use that query
		5.  now execute that query
		6.  check query successfully executed or not
		7.  connection closed
	*/
	
	$rt=mysql_connect("localhost","root","");//1.mysql connect function is used to connect php with mysql
	

	
	if($rt)//2.this if and else is used to check mysql is successfully connected or not 
	{
		echo "success";	
	}	
	else
	{
		echo "unable to connect";
	}

	
	
	//2.5taking value from html form and storing in a variable
	$name_value=$_POST['txt1'];
	$password_value=$_POST['pwd'];
	$gender_value=$_POST['sex'];
	$city_value=$_POST['city'];



	$u="insert into school2 values('$name_value','$password_value','$gender_value','$city_value')";//3.main query start
	
	

	mysql_select_db("aarti",$rt);//4.this function is used select database u want to use 
	


	$y=mysql_query($u,$rt);//5.mysql_query function is used to execute query
	
	


	if($y)//6.this if and else statements are used to check query successfully executed or not
	{
		echo "<br /> main query successfully executed";	
	}
	else
	{
		echo "<br /> main query successfully not executed";	
	}




mysql_close($rt);//7.connection closed
?>