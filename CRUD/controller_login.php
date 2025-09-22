<?php
// demo only do  not use in Live Server
// should be in database and encrypted!!!
define("SECRET_PASSWORD", "AverySecureP@ssword");
define("SECRET_USER", "admin");


// Retrieve all posted form data
// $_POST

$username = $_POST['username'];
$password = $_POST['password'];

$msg = "Invalid Account";
if($username === SECRET_USER){
    if($password === SECRET_PASSWORD){
        $msg = "WELCOME ". SECRET_USER;
    }else{
        $msg = "Invalid Password";
    }
}else{
    $msg = "Username not found";
}

echo $msg;
