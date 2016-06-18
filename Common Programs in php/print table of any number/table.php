<?php
/*QUES:-
Table of any number
Input-> any number 
Output-> table of that number

Example->
	Input->4
	Output->4, 8, 12, 16, 20, 24, 28, 32, 36, 40

	Input->9
	Output->9, 18, 27, 36, 45, 54, 63, 72, 81, 90
	
	Input->1.1
	Output->1.1, 2.2, 3.3, 4.4, 5.5, 6.6, 7.7, 8.8, 9.9, 10.10
*/
/*
ALGORITHM-
	1.   take number from user
	2. 	 store that number in a variable
	2.5. number *1 and print
	3.   continue 2.5 step till 10
	4.   finish
*/
	$number=$_POST['txt1'];
	
	/*
	echo ($number * 1)."<br />";
	echo ($number * 2)."<br />";
	echo ($number * 3)."<br />";
	echo ($number * 4)."<br />";
	echo ($number * 5)."<br />";
	echo ($number * 6)."<br />";
	echo ($number * 7)."<br />";
	echo ($number * 8)."<br />";
	echo ($number * 9)."<br />";
	echo ($number * 10)."<br />";
*/

$y=1;
/*	echo ($number * $y)."<br />";$y=$y+1;
	echo ($number * $y)."<br />";$y=$y+1;
	echo ($number * $y)."<br />";$y=$y+1;
	echo ($number * $y)."<br />";$y=$y+1;
	echo ($number * $y)."<br />";$y=$y+1;
	echo ($number * $y)."<br />";$y=$y+1;
	echo ($number * $y)."<br />";$y=$y+1;
	echo ($number * $y)."<br />";$y=$y+1;
	echo ($number * $y)."<br />";$y=$y+1;
	echo ($number * $y)."<br />";$y=$y+1;
*/
while($y<11)
{
	echo ($number * $y)."<br />";
	$y=$y+1;
}
?>