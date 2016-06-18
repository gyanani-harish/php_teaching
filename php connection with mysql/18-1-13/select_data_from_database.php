<?php
	$abcd=mysql_connect("localhost","root","");
	if($abcd)
	{
		echo "connected<br />";	
	}
	else
	{
		echo "not connected<br />";	
	}
	mysql_select_db("aa",$abcd);	
	
	$qe="select * from table1";
	
	$check=mysql_query($qe,$abcd);
	
	if($check)
	{
		echo "selected";	
	}
	else
	{
		echo "not selected";	
	}
	while($row = mysql_fetch_array($check))
  	{
  		echo $row['rollno'] . " " . $row['name'];
  		echo "<br />";
  	}
	mysql_close($abcd);
?>