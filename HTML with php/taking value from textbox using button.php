<html>
	<body>
		<form method="post">
			enter a value:<input type="text" name="kk" />
					<input type="submit" value="ok" />
		</form>	
			<?php
				$r=$_POST["kk"];
				echo $r;		
			?>
	</body>
</html>