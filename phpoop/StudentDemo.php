<?php

// require our class file
require_once './Student.php';

// id 23-3682-902
// Course BSCS
// YEAR 3
// Section A

$studentOne = new Student(
    "23-3682-902",
    "BSCS",
    3,
    "A"
);

$studentOne->printInfo();
// update id
$studentOne->setID("25-1233-233");
// updated
echo "Updated".PHP_EOL;
$studentOne->printInfo();

// echo $studentOne->id; <-- accessing private is not allowed
echo "Obtained ID:" .$studentOne->getID();

