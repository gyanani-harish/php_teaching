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
	mysql_close($abcd);
?>