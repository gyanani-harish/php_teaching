<html>
	<body>
		<form method="get">
			enter a value:<input type="text" name="kk1" />
			<input type="submit" value="ok" />
		</form>	
		
			<?php	
				$a=$_GET["kk1"];
				$ceil_a=ceil($a);
				$floor_a=floor($a);
				$integer_value_a=intval($a);
				echo "ceil ".$ceil_a."<br />floor ".$floor_a."<br />integer ".$integer_value_a;		
			?>
	</body>
</html>