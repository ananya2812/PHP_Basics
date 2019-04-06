<!DOCTYPE html>
<html>
<head>
<h1>ARRAYS</h1>
</head>
<body>
<?php

$friends= array("nandini","shivangi","divisha","jobi","addu");
for ($x=0;$x<count($friends);$x++)
	{
	echo $friends[$x];
	echo "<br>";

	}
sort($friends);

foreach($friends as $name)
{
	echo $name."<br>";
}

$mapping = array ( "Shivangi"=> "shubham", "divisha"=> "shubham", "nandini"=>"sashwat");

foreach ($mapping as $key=>$value)
	{
	echo "Key = ".$key." Value = ".$value."<br>";
	}

krsort($napping);
foreach($mapping as $key=>$value)
{
	echo "Key = ".$key." Value = ".$value."<br>";
}

?>
</body>
</html>
