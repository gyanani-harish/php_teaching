<?php
	//this is a program to delete a file
	$result=unlink("f.txt");
	
	if($result==0)
	{
		echo "file not deleted";
	}
	else
	{
		echo "file successfully deleted";
	}
?>