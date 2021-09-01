<?php $title= "Date & Time"; 
include'include/header.php'  
?>


    <?php
    echo "<h1 style= 'color:blue' >  $title </h1>";
    $date= getdate();
    echo $date['mday'].'<br>';
    echo $date['mon'].'<br>';
    echo $date['year'].'<br>';

    echo "Today's date is: " .$date['mday']."/".$date['mon']."/".$date['year']. '<br>';


    // One more Way w3school
    echo "Date: " . date('d-m-Y'). "Day: ". date('l'). "<br>";
    echo "Time: " .date('h:i:sa'). "<br>";




    ?><?php require 'include/footer.php'?> 
