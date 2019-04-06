<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>SESSION</title>
</head>
<body>
<?php

echo"Session Variables are : ".$_SESSION["name"]." <br>";
echo "Session Variables are : ".$_SESSION["Age"]." <br>";

print_r($_SESSION);

?>
</body>
</html>