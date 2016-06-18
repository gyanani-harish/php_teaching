<html>
	<head>
	</head>
	<body>
	<form >
		<input type="text" name="txt1" />
		<input type="text" name="txt2" />	
		<input type="submit" name="submit" /><input type="text" name = "txt3" />
	</form>	
	<?php
		$c = "$txt1" + "$txt2";
		echo $c;
	?>
	
	</body>
</html>