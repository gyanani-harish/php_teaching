<html>
	<body>
		<form method="post">
			<select name="schools">
				<option value="mhs">maheshwari senior secondary school</option>
				<option value="mps">maheshwari public school</option>
				<option value="mgps">maheshwari girls public school</option>
				<option value="other">Other</option>
			</select>
			<input type="submit" />
		</form>
		<?php
			$abcd=$_POST['schools'];
			if($abcd=="other")
			{
				echo "<input type='text' />";
			}
			else
			{	
				echo $abcd;
			}	
		?>
	</body>
</html>