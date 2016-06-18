<?php
session_start();  
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+ 1;
else if($_SESSION['views']>=10)
	session_destroy();
else
    $_SESSION['views'] = 1;

echo "views = ". $_SESSION['views']; 
?>
