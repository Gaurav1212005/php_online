<?php $title= "Switch Case "; 
include'include/header.php'  
?>



    <?php 
    echo "<h1 style= 'color:blue' >  $title </h1>";
        $grade = 2;
        switch ($grade) {
            case 1 :
                echo "You are Super Star";
                break;
             case 2:
                  echo "You are Good ";
                break;
            default:
            echo "You Failed...";
                break;
        }
        ?><?php require 'include/footer.php'?> 