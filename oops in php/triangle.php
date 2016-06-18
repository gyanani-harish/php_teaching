<?php
	class tri
	{
		private $base;
		private $height;
		function setbase($b)
		{
			$this->base=$b;
		}
		function setheight($h)
		{
			$this->height=$h;
		}
		function triangle()
		{
			$ans= 1/2*this->base*this->height;
			return $ans;
		}
	}
	$tr= new tri;
	$tr->setbase(5);
	$tr->setbase(10);
	$we=$tr->triangle();
	return $we;
?>