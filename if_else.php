<?php $title= "If else "; 
include'include/header.php'  
?>

    <?php 
    echo "<h1 style= 'color:blue' >  $title </h1>";
    echo " <h1>If Statement Grade</h1>";
    $grade =60;
    // === == > < <= >=
      if($grade >= 50){
        echo "<h3 style='color:green'> You have passed </h3>";
        }
    else{
        echo "<h3 style='color:red'> You have failed </h3>";
        }
        
    $grade = 'A';
    if($grade == 'A' || $grade == 'C'){
        echo "You are Super Star";
    }
    elseif($grade == 'B'){
        echo "You are Best";
    }
    else {
        echo "You  Failed...";
    }

    ?><?php require 'include/footer.php'?> 