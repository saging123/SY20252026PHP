<?php
$curDirPath = __DIR__;
require $curDirPath . "/Configs/DatabaseConfig.php";
require $curDirPath . "/Libraries/DatabaseConnector.php";


$dbObjCon = new DatabaseConnector(DatabaseConfig::DB_MAIN);
$dbConnection = $dbObjCon->connect();

// INSERT Maria Joana Lopez , 20-1224-808
$idNo =$_POST["id_no"];
$fname = $_POST["fname"];
$lname =$_POST["lname"];

try {
    $userRegistration = $dbConnection->prepare("INSERT INTO users (`id_no`,`fname`,`lname`) VALUES (?,?,?)");
    $userRegistration->bindParam(1, $idNo, PDO::PARAM_STR);
    $userRegistration->bindParam(2, $fname, PDO::PARAM_STR);
    $userRegistration->bindParam(3, $lname, PDO::PARAM_STR);
    $userRegistration->execute();
} catch (PDOException $e) {
    echo "Failed to Register" . $e->getMessage();
}

echo 'Thank you for registration <a href="Register.html"> Register Again</a>';