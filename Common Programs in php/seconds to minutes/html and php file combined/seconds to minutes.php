<html>
	<body>
		<form method="post">
			enter seconds value:<input type="text" name="kk1" />
			<input type="submit" value="Seconds To Minutes" />
		</form>	
			<?php
				$seconds=$_POST["kk1"];
				$minutes=$seconds/60;
				$minutes=intval($minutes);
				$remaining_seconds=$seconds%60;
				echo $minutes." minutes and".$remaining_seconds." seconds";
				
			?>
	</body>
</html>