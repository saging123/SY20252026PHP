<?php
$curDir = __DIR__ ;
require_once($curDir."/Config/Database.php");

$dbObject = new Database();
$dbCon = $dbObject->connect();

// INSERT
$idno = "23-111-111";
$firstName = "John";
$lastName = "Cena";

$insertUser1 = $dbCon->prepare("INSERT INTO users (id_number,first_name,last_name) VALUES(?,?,?)");
$insertUser1->bindParam(1,$idno, PDO::PARAM_STR);
$insertUser1->bindParam(2,$firstName, PDO::PARAM_STR);
$insertUser1->bindParam(3,$lastName, PDO::PARAM_STR);
$insertUser1->execute();


$insertUser2 = $dbCon->prepare("INSERT INTO users (id_number,first_name,last_name) VALUES(:id,:fname,:lname)");
$insertUser2->bindParam(':id',$idno, PDO::PARAM_STR);
$insertUser2->bindParam(':fname',$firstName, PDO::PARAM_STR);
$insertUser2->bindParam(':lname',$lastName, PDO::PARAM_STR);
$insertUser2->execute();

echo "Added!";