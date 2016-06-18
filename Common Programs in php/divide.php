<html>
	<body>
		<form method="post">
			enter first value:<input type="text" name="kk1" />
			enter second value:<input type="text" name="kk2" />
			<input type="submit" value="divide" />
		</form>	
			<?php
				$r=$_POST["kk1"];
				//$t=1;
				$t=$_POST["kk2"];
				$e=$r/$t;
				echo $e;		
			?>
	</body>
</html>