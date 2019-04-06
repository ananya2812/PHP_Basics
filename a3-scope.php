<!DOCTYPE html>
<html>
	<head>
		<h1>SCOPE</h1>
	</head>
	<body>
		<?php
		
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		$x=10; #global
		echo "Global variable x = $x"; 
		echo "<br>";

		function forScope()
		{
			$y=100;	#local
			global $z;
			$z=1000; #global
			echo "Local Variabe y = $y";
			echo "Global Variable x= ".$GLOBALS['x'];

		}
		 forScope();
		echo "Local Variable y = $y";
		echo "Global Variable z= ".$z;

		?>
	</body>
</html>


		

		
