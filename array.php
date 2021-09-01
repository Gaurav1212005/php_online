<?php $title= "Array"; 
include'include/header.php'  
?>

    <h1>Array</h1>
    <?php
    echo "<h1 style= 'color:blue' >  $title </h1>";
    $numbers=  array(1,2,3,4,5,6,7,8,9,10,11,12);
    echo $numbers[7];

    $size = count($numbers); 
    echo "<p> Total Number of numbers: $size </p>";

    for ($i=0; $i <$size ; $i++) { 
        echo "<p style ='color:blue'>$numbers[$i]</p>";
    }

    ?><?php require 'include/footer.php'?> 