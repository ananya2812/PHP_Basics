<!DOCTYPE html>
<html>
<head>
	<title>FILTER</title>
</head>
<body>
<?php

$str= "<h1>Hello World<h1>";
$newstr = filter_var($str,FILTER_SANITIZE_STRING);

echo $newstr." <br>";

$int = 100;

if(!filter_var($int,FILTER_VALIDATE_INT) == false)
echo "Interger is valid <br>";
else
echo "Interger not valid <br>";


$din =0 ;


if(filter_var($din,FILTER_VALIDATE_INT)===0 || !filter_var($din,FILTER_VALIDATE_INT)===false)
{
	echo "Valid <br>";
}
else
{
	echo "Invslid <br>";
}

$ip = "127.0.0.1";
if (! filter_var($ip,FILTER_VALIDATE_IP)===false)
	echo "VALID IP <br>";
else
		echo "INVALID IP <br>";

$email = "ananya281294@gmail.com";
$email = filter_var($email,FILTER_SANITIZE_EMAIL);

if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false)
echo "Valid email <br>";

else
echo "Invalid email <br>";


$url = "https://www.netbeans.org";

$url= filter_var($url,FILTER_SANITIZE_URL);

if(!filter_var($url,FILTER_SANITIZE_URL)===false)
	echo "Valid URL <br>";
else 
	echo "Invalid URL <br>";
?>
</body>
</html>