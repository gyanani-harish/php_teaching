<html>
	<body>
		<form method="post">
			<input type="radio" name="sex" value="male" /> Male<br />
			<input type="radio" name="sex" value="female" /> Female
			<input type="submit" />
		</form>
		<?php
			$abcd=$_POST['pwd'];
			echo $abcd;	
		?>
	</body>
</html>