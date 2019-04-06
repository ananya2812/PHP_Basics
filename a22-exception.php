<!DOCTYPE HTML>
<html>
<head>
<h1>Exception</h1>
</head>
<body>
<?php
class customException extends Exception
{
	public function errorMessage()
	{
		$errMsg = 'Error on Line '.$this->getLine().' in '.$this->getFile(). ': <b>'.$this->getMessage().' <b> is not a valid E-mail';
		echo $errMsg;
	}
}


$email = "ananyagmail.com";

try{

	if (filter_var($email, FILTER_VALIDATE_EMAIL)=== FALSE)
	{
		throw new customException($email);
	}
}
catch(customException $e)
{
	$e->errorMessage($email);
}


?>
</body>
</html>
