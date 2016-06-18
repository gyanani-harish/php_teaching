<?php
 	
	/*
	algorithm-
		1.connect php with mysql
		2.check it is connected or not
		3.write a query and store in a variable
		4.select database where you want to use that query
		5.now execute that query
		6.check query successfully executed or not
	*/
	
	$rt=mysql_connect("localhost","root","");//1.mysql connect function is used to connect php with myswl
	

	if($rt)//2.this if and else is used to check mysql is successfully connected or not 
	{
		echo "success";	
	}	
	else
	{
		echo "unable to connect";
	}


	//3.main query start
	$u="	create table school
		(
			name char(30)
		)

	";
	
	
	mysql_select_db("aarti",$rt);//4.this function is used select database u want to use 
	
	$y=mysql_query($u,$rt);//5.mysql_query function is used to execute query
	
	//6.this if and else statements are used to check query successfully executed or not
	if($y)
	{
		echo "<br /> table created";	
	}
	else
	{
		echo "<br /> table not created";	
	}




mysql_close($rt);
?>