<?php
include 'file_open_check_using_if.php';
 

while(!feof($file))
{
	echo fgets($file)."<br />";
}
fclose($file);


include 'name.php';
?>