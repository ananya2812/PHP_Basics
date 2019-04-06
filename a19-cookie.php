<!DOCTYPE html>

<?php
$cookie_name = "Ananya";
$cookie_value="Annu";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>

<html>
<head>
	<title>COOKIE</title>
</head>
<body>

<?php

if(!isset($_COOKIE[$cookie_name]))
	{echo "Cookie named ". $cookie_name." is not set!";
	}

	else{
	 	echo "Cookie named ".$cookie_name." is set <br>";
	 	echo "Value of Cookie ".$_COOKIE[$cookie_name]." <br>";
	 } 

if (count($_COOKIE)>0)
	echo "Cookie is set";
else
	echo "Cookie is not set";

?>
</body>
</html>