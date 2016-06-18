<?php
	function formula($a,$b,$c)//function declaration and  definition
	{
		$s=($a*$b*$c)/2;
		echo $s;
		$answer=$sqrt($s($s-$a)($s-$b)($s-$c));
		echo $answer;
	}	
	 formula(6,5,2);//calling function

?>