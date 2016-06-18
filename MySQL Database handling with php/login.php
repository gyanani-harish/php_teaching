<?php
	/*
	algorithm to insert data in a table-
		1.  connect php with mysql
		2.  check it is connected or not
		2.5 taking value from html form and storing in a variable
		3.  write a query and store in a variable
		4.  select database where you want to use that query
		5.  now execute that query
		5.5 check password and username 
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
	$name_value=$_POST['username'];
	$pas_value=$_POST['password'];


	//3.main query start
	$u=$check_name="select name from school2 where city='jaipur'";
	$t=$check_pas="select password from school2 where city='jaipur'";	
		

	mysql_select_db("aarti",$rt);//4.this function is used select database u want to use 
	

	//5.mysql_query function is used to execute query
	$y=mysql_query($u,$rt);	
	$z=mysql_query($t,$rt);
	
	//5.5 
	if($name_value==$check_name && $check_pas==$pas_value)
	{
		echo "login successful";	
	}
	else
	{
		echo "password or username incorrect";
	}

	if($y or $z)//6.this if and else statements are used to check query successfully executed or not
	{
		echo "<br /> main query successfully executed";	
	}
	else
	{
		echo "<br /> main query successfully not executed";	
	}




mysql_close($rt);//7.connection closed
?>