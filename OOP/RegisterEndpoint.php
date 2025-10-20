<?php
require_once("Person.php");

$firstname  = $_POST["firstname"];
$lastname   = $_POST["lastname"];
$age        = $_POST["age"];
$phone      = $_POST["phone"];

$obj = new Person();
$obj->age = $age;

try {
    $obj->setFirstName($firstname);
    $obj->setLastName($lastname);
    $obj->setPhone($phone);
    echo $obj->printInfo();
} catch (Exception $e) {
    echo $e->getMessage();
}





