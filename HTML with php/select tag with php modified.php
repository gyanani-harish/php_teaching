<html>
	<body>
		<form method="post">
			<select name="schools">
				<option value="mhs">mhs</option>
				<option value="mps">mps</option>
				<option value="other">Other</option>
						
			</select>
			<input type="submit" />
		</form>
		<?php
			$sch=$_POST['schools'];
			if($sch=="other")
			{
				echo "<input type='text' />";	
			}	
			else
			{
				echo $sch;
			}
		?>
	
	</body>
</html>