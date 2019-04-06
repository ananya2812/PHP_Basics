<!DOCTYPE html>
<html>
<head>
<h1>MULTI ARRAYS</h1>
</head>
<body>
<?php
$names = array(
	array("Ananya",22,"noida"),
	array("Nandini",22,"Hyderabad"),
	array("Shivangi",20,"Bangalore"),
	array("Apoorv",22,"Gurugram")
	);
for($row=0;$row<4;$row++)
{
echo "<p><b>Row Number $row</b></p>";
echo "<ul>";
for($col=0;$col<3;$col++)
{
echo "<li>".$names[$row][$col]."</li>";
}
echo"</ul>";
}


?>
</body>
</html>
