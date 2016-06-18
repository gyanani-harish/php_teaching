<html>
	<body>
		<form method="post">
			<textarea name="txtarea" rows="10" cols="30">
			</textarea>

			<input type="submit" />
		</form>
		<?php
			$abcd=$_POST['txtarea'];
			echo $abcd;	
		?>
	</body>
</html>