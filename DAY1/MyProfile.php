<?php

$gravity = 9.8; //<-- can be modify

// define Constant 
define("GRAVITY", 9.8); // use only the Name no need for dollar sign;
// GRAVITY = 0; <-- you cannot reassign


$greetings                  = "Wassup!";
$title                      = "DogBook";
$footer                     = "CC 2025";

$fullName                   = "Juan Dela Cruz";
$age                        = 24;
$city                       = 'Cadiz';
$province                   = "Negros Occidental";

$games                      = ['Tekken8', 'Grow a Garden', 'Valorant', 'Dota 2', 'MLBB', 'God of War '];
$hobbies                    = ['Gaming', 'Dancing', 'Singing', 'Running', 'Coding'];

$businesses                = ['Burger', 'Hotdog', 'FishBall', 'Tempura'];



function createListFromArr($arrayData){
    $len = count($arrayData);
    $str = "";
    for($i = 0; $i < $len; $i++){
        $str .= "<li style=\"color: red\"> $arrayData[$i] </li>";
    }
    return $str;
}

function hello(){
    return "Hello";
}
// access outside variable
function callOutSide(){
    global $title;
    return "Out title is $title";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?> </title>
    <style>
        .fancy-div{
            padding: 10px;
            color: #000;
            font-weight: bold;
            background-color:#fb6f92
        }
    
    </style>
</head>
<body>
    <p class="fancy-div"><?php echo $greetings;?> From Cebu
         </p>

         <div>
            <div>  Gravity:  <?= GRAVITY; ?></div>
             <div>  Call external Variable:  <?= callOutSide(); ?></div>
            <div> I am <?= $fullName;?> </div>
            <div> Living in <?= $city;?> City, <?= $province;?> </div>
            <div> <?= $age;?> Years Old </div>

            
            <!-- Create List Using For loop -->
            <div>
                <ul>
                    <?php 
                        $len  = count($games);
                            for($i=0; $i < $len; $i++){
                                echo "<li> $games[$i] </li>";
                            }
                    ?>
                </ul>
            </div>

            <!-- Create List Children Using Function -->
            <div>
                <ul>
                    <?= createListFromArr($hobbies); ?>
                </ul>
            </div>

            
            <!-- Create List Children Using Function -->
            <div>
                <ol>
                    <?= createListFromArr($businesses); ?>
                </ol>
            </div>

         </div>

         <footer><?= $footer;  ?> | All rights Reserved | <?= hello();?> </footer>
</body>
</html>


