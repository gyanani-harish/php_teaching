<?php
$file=fopen("welcome.txt","r");
if($file==0)
{
	echo "unable to open file";
}
else
{
	echo "file successfully opened";
}
?>