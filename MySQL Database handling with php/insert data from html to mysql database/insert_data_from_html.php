<?php
	$r=$_POST["txt2"];
	$n=$_POST["txt1"];
	
	$abcd=mysql_connect("localhost","root","");
	if($abcd)
	{
		echo "connected\n";	
	}
	else
	{
		echo "not connected\n";	
	}
	mysql_select_db("aa",$abcd);	
	
	$qe="insert into table1 values('4012','harish');";
	
	$check=mysql_query($qe,$abcd);
	
	if($check)
	{
		echo "inserted";	
	}
	else
	{echo $r;
		echo "not inserted";	
	}
	mysql_close($abcd);
?>