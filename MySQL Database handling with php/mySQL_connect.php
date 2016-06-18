<?php
$rt=mysql_connect("localhost","root","");
if($rt)
{
	echo "success";	
}
else
{
	echo "unable to connect";
}

mysql_close($rt);
?>