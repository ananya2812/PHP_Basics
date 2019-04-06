<?php

$servername = "localhost";
$username = "root";
$password= "";
$dbname="test1";

try
{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	/*
	echo "<br> Connection Successfull";
	$sql = "CREATE TABLE employee(
		id INT(6)  PRIMARY KEY AUTO_INCREMENT NOT NULL,
		firstname VARCHAR(100)
		)";
	$conn->exec($sql);
        echo "<br>Table Created";
	$sql = "INSERT INTO employee Values(1,'ananya')";
	$conn->exec($sql);
	echo "<br> Record Inserted";
	
	
	$sql = "INSERT INTO employee(firstname) Values('adweyta')";
	$conn->exec($sql);
	$lastId = $conn->lastInsertId();
	echo "<br>Last Inserted Id is : ".$lastId;
	*/

	
	$conn->beginTransaction();
	$conn->exec("INSERT INTO employee(firstname) Values('nandini')");
	$conn->exec("INSERT INTO employee(firstname) Values('apoorv')");
	$conn->exec("INSERT INTO employee(firstname) Values('abhishek')");
	$conn->commit();
	echo "New Record Inserted";

	
}
catch(PDOException $e)
{

	//echo  $e->getMessage();
	$conn->rollback();
	echo "Error: ".$e->getMessage();
}
$conn = null;

?>
