<html>
	<body>
		<form method="post">
			<select name="schools">
				<option value="mhs">mhs</option>
				<option value="mps">mps</option>
			
			</select>
			<input type="submit" />
		</form>
		<?php
			$school=$_POST['schools'];
			echo $school;
		?>
	
	</body>
</html>