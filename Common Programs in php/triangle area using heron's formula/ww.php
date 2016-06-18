<?php
	$a=$_POST["txt1"];
	$b=$_POST["txt2"];
	$c=$_POST["txt3"];
	$s=($a+$b+$c)/2;
	$area=sqrt($s*($s-$a)*($s-$b)*($s-$c));
	echo $area;
?>