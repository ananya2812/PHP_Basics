<!DOCTYPE html>
<html>
<head>
<h1>CONDITIONAL</h1>
</head>
<body>
<?php
$t = date("H");

if($t <10)
{echo "Good";}
elseif ($t>10 and $t<23)
{echo ("Bad");}
else
{echo ("Worse");}

?>
</body>
</html>
