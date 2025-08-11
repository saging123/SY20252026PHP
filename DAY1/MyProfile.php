<?php
$greetings = "Wassup!";
$title = "DogBook";
$footer = "CC 2025";

$fullName = "Juan Dela Cruz";
$age = 24;
$city = 'Cadiz';
$province = "Negros Occidental";

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
            <div> I am <?= $fullName;?> </div>
            <div> Living in <?= $city;?> City, <?= $province;?> </div>
            <div> <?= $age;?> Years Old </div>
         </div>

         <footer><?= $footer; ?> | All rights Reserved</footer>
</body>
</html>


