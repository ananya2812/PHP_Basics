<!DOCTYPE html>
<html>
<head>
	<title>TIME-DATE</title>
</head>
<body>

<?php
echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("d-m-Y")."<br>";
echo "Today is ".date("l")."<br>";
echo "The time is ".date("h:i:sa")."<br>";


$d=strtotime("1 may 2017 10:30 am");
echo "Created date is ".date("d:m:Y h:i:sa",$d)."<br>";




?>

</body>
</html>