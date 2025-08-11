<?php

// Comment
/**
 * Comment
 */


$fName = "Anna";
$lName = 'Dela Cruz';

// String concatenation

echo "<p>Hello World $fName " . '!' . "!! </p>";
print "<p>Hello World $lName</p>";
echo '<p>Hello World '. $fName .'</p> ';
print '<p>Hello World '. $lName.'</p>';

$fullName = "Juan Dela Cruz";
$age = 24;
$city = 'Cadiz';
$province = "Negros Occidental";
echo '------------------------';
echo "<p>I am $fullName </p>";
echo '<p>Living in '. $city. ' City, '.$province.' </p>';
echo $age. " Years Old";