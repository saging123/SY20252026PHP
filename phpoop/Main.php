<?php
// how to import the file?
// required & include
// require -> the program will crash if the file is not found
// include -> the program will continue even file not found
// java uses "import" keyword
// c# uses "using" keyword
require './UserManagement.php';
// include './UserManagement.php'; <-- does not throw error if not found

// --- require_once & include_once ----
// <-- the same but make sure that the file is only included once

// object declaration
$objUserMgmt = new UserManagement("Jonathan","Lachica",35);
// calling the public methods / Variables
echo $objUserMgmt->buildFullName().PHP_EOL;

// assignment of public variable
$objUserMgmt->lname = "Eric";

echo "Lname New Value is: ". $objUserMgmt->lname.PHP_EOL; 
echo "Full name after Update: ".$objUserMgmt->buildFullName().PHP_EOL;
// cannot access private / protected methods/ variables
// echo $objUserMgmt->privateDataTypeMethod();

$objUserMgmtv2 = new UserManagement("Brian","Franco",12);
echo $objUserMgmtv2->buildFullName().PHP_EOL;

