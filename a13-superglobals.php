<!DOCTYPE html>
<html>

<head>
<h1>SUPERGLOBALS</h1>
</head>


<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="name">
<input type="submit" value="submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
	{

	$name = $_REQUEST['name'];
	if(empty($name))
	{
	echo "Name is empty";
	}
	else
	{
	echo $name;
	}
	}
?>
</body>







</html>
