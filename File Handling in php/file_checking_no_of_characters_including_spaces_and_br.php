<?php
$file=fopen("welcome2.txt","r");
if($file==0)
{
	echo "unable to open file";
}
else
{
	echo "file successfully opened<br />";
}
$i=0;
while(!feof($file))
{
	fgetc($file);//it is used here to read a character and move to next character
	$i++;
}
echo $i;
fclose($file);
?>