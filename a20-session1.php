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


$_SESSION["name"]="ananya";
$_SESSION["Age"]=22;
echo "Session Variables are set <br>";


?>

</body>
</html>