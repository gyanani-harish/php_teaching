<?php
	/*UPDATE table_name
	SET column1=value, column2=value2,...
	WHERE some_column=some_value
	 */
	/*
	note:- if we do not write where clause with update statement it updates all the records of that table
	*/
	/*
	algorithm to insert data in a table-
		1.  connect php with mysql
		2.  check it is connected or not
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

	
	
	
	$u="UPDATE school2 
		SET password='xxxx'
		WHERE name='ritu'";
		//3.main query 
	
	

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