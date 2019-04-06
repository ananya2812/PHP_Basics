<!DOCTYPE html>
</html>
<head>
<h1>Loops</h1>
</head>

<body>
<?php
$x=1 ;
while($x<=5)
{
echo $x;
echo "<br>";
$x++;
}
?>
<hr>
<?php

do{
echo $x;
echo "<br>";
$x--;}
while($x>0);
?>

<hr>
<?php
for($a=1;$a<5;$a++)
	{
	echo $a;
	echo "<br>";
	}
?>
<hr>
<?php
$names= array("ananya","abhishek","appoorv","nandini","shivangi","jobi","addu","divu");
foreach($names as $values)
	{echo $values;
	echo"<br>";
	}
?>
</body>

</html>
