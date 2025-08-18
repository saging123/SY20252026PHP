<?php


/**
 * Functions are reusable block of code
 * You can pass Parameters (optional)
 * use keyword "function" to declare
 */

// user-defined function <-- declared by you programmer
// pre-defined function <--- built-in function

function sum($i, $j){
    return $i + $j;
}
function createListFromArr($arrayData){
    $len = count($arrayData);
    $str = "";
    for($i = 0; $i < $len; $i++){
        $str .= "<li> $arrayData[$i] </li>";
    }
    return $str;
}

$num1 = 1;
$num2 = 2;
$num3 = sum($num1, $num2);




