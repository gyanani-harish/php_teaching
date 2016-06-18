<?php
/*Factorial program
Input-> any number 
Output-> factorial of that number

Example->
	Input->4
	Output->24

	Input->5
	Output->120
	
	Input->3
	Output->6
*/
/*
ALGORITHM-
	1.	take value from user
		1.1		design a html form to collect one number from user
			1.1.1	in form, design a text field and submit button	
	2.	store that value in a variable
		2.1 	connect form with php file
		2.2		make a variable in php and store text field value into variable through $_POST function
	3.	apply formula
		3.1		formula n!=n*(n-1)*(n-2).....{n-(n-1)}
	4.	print answer
		4.1		using echo we will print the answer
	5.   finish
*/



$n=$_POST['txt1'];
$answer=1;
	while($n>1)
	{
		$answer=$answer*$n;
		$n=$n-1;
	}
	
echo $answer;
/*
how this loop is running
1. 
	n=4
	answer=1
	condition: 4>1 true
		answer=4*1, answer=4
		n=n-1, n=3

2.
	n=3
	answer=4
	condition : n>1, 3>1 true
		answer=4*3. answer=12
		n=n-1, n=2


3.
	n=2
	answer=12
	condition : n>1, 2>1 true
		answer=12*2. answer=24
		n=n-1, n=1		

4.
	n=1
	answer=24
	condition : n>1, 1>1 false
	loop finish
*/
?>