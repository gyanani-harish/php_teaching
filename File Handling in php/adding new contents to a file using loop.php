<?php
	$file = fopen("new2.txt","a");
	
	for($i=0;$i<=10000;$i++)
	{
		fputs($file,"Hello World. Testing!");
	}
	fclose($file);
?>