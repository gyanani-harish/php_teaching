<?php
	$abcd=mysqli_connect("localhost","root","","d1");
	if($abcd)
	{
		echo "connected";	
	}
	else
	{
		echo "not connected";	
	}
	mysqli_close($abcd);
?>