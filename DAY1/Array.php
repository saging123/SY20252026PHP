<?php

// PHP ARRAY 

// Indexed Array
// empty array
$arrayOfFruits = [];
// Intialize
$arrayOfFruits = ['Apple', 'Orange', 'Banana','Avocado']; 
//  Adding Items
$arrayOfFruits[] =  'Manga';
// Updating Items 
$arrayOfFruits[1] =  'Atis';
// Accessing Items
echo $arrayOfFruits[1];

$len  = count($arrayOfFruits);
echo '<br/> Len '.$len .'</br>';
// loop
for ($i=0; $i < $len ; $i++) { 
    echo " $i ==> ". $arrayOfFruits[$i]. '<br/>';
}

