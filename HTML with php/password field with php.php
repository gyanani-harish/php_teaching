<html>
	<body>
		<form method="post">
			Password: <input type="password" name="pwd" />
			<input type="submit" />
		</form>
		<?php
			$abcd=$_POST['pwd'];
			echo $abcd;	
		?>
	</body>
</html>