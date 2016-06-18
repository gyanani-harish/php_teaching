<?php
	$file = fopen("new12.txt","a");
	fputs($file,"Hello World. Testing!");
	fclose($file);
?>