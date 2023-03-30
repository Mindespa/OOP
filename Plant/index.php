<?php include "./Plant.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
     <?php
    // doSomething();
    // function doSomething()

     $plant = new Plant();
     print_r($plant);
     echo "<br>";

     $plant->name = "Caper";
     $plant->latinName = "Flinders rose";
     $plant->perennial = "true";
     $plant->height = 1;
     $plant->continents = ["europe","asia"];
     $plant->year = 2;

     var_dump($plant);
     echo "<br>";

     $plant1 = new Plant();
     $plant1->name = "Ribes";
     $plant1->latinName = "Grossulariaceae";
     $plant1->perennial = "true";
     $plant1->height = 2;
     $plant1->continents = ["europe","asia"];
     $plant1->year = 4;

     var_dump($plant1);
     echo "<br>";

     $plant5 = new Plant ("ivy","Hedera","false",0.2,["europe","africa"],1);

     var_dump($plant5);
     echo "<br>";


     
     
     
     
     
     
     
     
     
     ?>


</body>
</html>