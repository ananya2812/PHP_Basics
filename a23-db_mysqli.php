<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername="localhost";
$username="root";
$password="";
$dbname = "myDb";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error)
{
	
	die("Connection Error". $conn->connect_error);
	
}

//$sql = "CREATE DATABASE myDb";

/*$sql = "CREATE TABLE Students 
	(
	id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
	firstname VARCHAR(20) NOT NULL,
	lastname VARCHAR(20) NOT NULL,
	email VARCHAR(30)
	)";
*/

$sql = "INSERT INTO Students (firstname,lastname,email) VALUES ('Abhishek','Roy','ananya281294@gmail.com')";

if ($conn->query($sql)===TRUE)	
	{
		//echo "Database created successfully";
		//echo "Table created successfully";
		echo "Data Insertion Success";
	
	}
else
	{
 		echo "Error :".$conn->error();

	}

$conn->close();
?>
