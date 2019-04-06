<?php

$servername="localhost";
$username="root";
$password="";
$dbname="myDb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
	{	
		echo "Connection Failed".mysqli_connect_error();
	}

/*$sql = "CREATE TABLE Course
	(
	id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL)";
*/

$sql = "INSERT INTO Course (id,name) VALUES (2,'Economics')";
if(mysqli_query($conn,$sql))
	{
		//echo "Table created Successfully";
		echo "Data Insertion Successfully";
	}
else
	{
		echo "Error :".mysqli_error($conn);

	}


mysqli_close($conn);

?>
