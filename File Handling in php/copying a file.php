<?php
	$file = fopen("newfile9.txt","r");
	$file2 = fopen("../newfile456.txt","w");
	
	while(!feof($file))
	{
		$x=fgets($file);
		fputs($file2,$x);	
	}	
	
	fclose($file);
	fclose($file2);
?>