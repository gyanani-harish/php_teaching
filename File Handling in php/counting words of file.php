<?php
	$abc=fopen("newfile6.txt","r");
	$count=0;
	while(!feof($abc))
	{
		$x=fgetc($abc);
		if($x==' ')
		{
			$count++;
		}	
	}
	$count++;
	echo $count;
	fclose($abc);
?>