<?php
$servername = "localhost";
$dbname = "test1";
$username = "root";
$password = "";

try {

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "<br>Connection Successfull";

	$stmt= $conn->prepare("INSERT INTO employee (firstname) VALUES (:firstname)");
	$stmt->bindParam(':firstname',$firstname);

	$firstname = "Panda";
	$stmt->execute();
	$firstname="Zebra";
	$stmt->execute();

	echo "<br>Records Inserted";
	
	/*$stmt = $conn->prepare("SELECT id, firstname FROM employee"); 
    	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	print_r("<br>");
	print_r($result);

	$stmt = $conn->prepare("DELETE FROM employee WHERE firstname = :firstname");
	$stmt->bindParam(':firstname',$firstname);
	$firstname="Zebra";
	$stmt->execute();
	echo "<br> Record Deletion Success";*/
	

	$stmt = $conn->prepare("UPDATE employee SET firstname = :firstname WHERE id=:id");
	$stmt->bindParam(':firstname',$firstname);
	$stmt->bindParam(':id',$id);
	$firstname="xxx";
	$id = $conn->lastInsertId();
	$stmt->execute();
	echo "<br>".$stmt->rowCount()." Recod Updated Success";

     }

catch(Exception $e)
	{
		
	}




?>
