<?php
$file=fopen("welcome.txt","r");
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
	fgets($file);//it is used here to move to next line
	$i++;
}
echo $i;
fclose($file);
?>