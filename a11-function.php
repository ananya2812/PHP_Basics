<!DOCTYPE html>
<html>
	<head>
	<h1>FUNCTIONS</h1>
	</head>
	<body>
	<?php
	function bio($name, $gender, $salary=500)
	{
	echo "Bio : $name : $gender : $salary <br>";
	}
	bio("AMAN","MALE",1000);
	bio("ananya","Female");
	
	function testreturn($x,$y)
	{
	$sum= $x+$y;
	return $sum;
	}
	echo "Sum of 5 and 3 is ".testreturn(5,3);

	?>
	</body>
</html>
