<?php
	/*	SELECT  column_name(s)
		FROM table_name
		WHERE condition;
		
	 */
	/*
	note:- if we write * instead of column name it will select all columns
	*/
	/*
	algorithm to insert data in a table-
		1.  connect php with mysql
		2.  check it is connected or not
		3.  write a query and store in a variable
		4.  select database where you want to use that query
		5.  now execute that query
		6.  check query successfully executed or not
		6.5 write the query result content to webpage 
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

	
	
	
	$u="SELECT DISTINCT password,name
		FROM school2";//3.main query 
	
	

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

	while($row = mysql_fetch_array($y, MYSQL_ASSOC))
		{
			echo "<br />Name :{$row['name']} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
				 "Password :{$row['password']} <br />";
				
		}	


mysql_close($rt);//7.connection closed
?>