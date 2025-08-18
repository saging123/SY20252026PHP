<?php


$age = 30;

$msg = "";
//  == compare only value
//  === compare both value and data type
// if triggers only if condition/s return true


 // &&  < -- both conditions must  be true/meet
// ||  < -- both conditions must  be true/meet

if($age === "30"){
    $msg = "You are awesome";
}
else if($age <  20){
    $msg = "You are teen";
}
else{
    $msg = "You didn't meet any conditions";
}
print $msg;
print "------------------------<br/>";

$num = 80;
$msg = "Default Message";
if($num >= 90  || $num == 50){
    $msg = "First IF triggered";
}else if($num <= 10 && $num > 5){
     $msg = "Second IF triggered";
}

print $msg;
//  type casting
$strAge = "20";
$intAge = intval($strAge); // strval() , floatval()
$intNum = (int) "700"; 


function isOdd($num){
    return  $num % 2 == 1;
}

print "<br/>";
$testNumber = 10;

if(isOdd($testNumber)){
    print("This is Odd");
}else{
    print "This is Even";
}





