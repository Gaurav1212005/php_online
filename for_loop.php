<?php $title= "For Loop "; 
include'include/header.php'  
?>

  
    <?php 
    echo "<h1 style= 'color:blue' >  $title </h1>";
    
    for ($i=0; $i <10 ; $i++) { 
        echo " <h3>Count: $i</h3>";
    }

    ?><?php require 'include/footer.php'?> 