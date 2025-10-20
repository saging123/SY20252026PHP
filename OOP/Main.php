<?php
require_once("Person.php"); //The execution will  stop if file not found and also ensure the file is included once;
// require(""); The execution will  stop if file not found;
// include_once(""); <-- The execution will not stop if file not found and also ensure the file is included once;
// include(""); <---The execution will not stop if file not found;
// arguments call to values passed as parameters

$obj = new Person("Robert", "Sean");
$obj->age = 20;
// $obj->firstName = "ER"; // this will throw error Not Found since it is private
// $obj->lastName = "lastName"; // this will throw error Not Found since it is private
try {
    $obj->setPhone('090867651211');
    $obj->setFirstName("Kian");
    echo $obj->printInfo();
} catch (Exception $e) {
    echo $e->getMessage();
}

