<?php $title= "Home"; 
include'include/header.php'  ?>


    <?php 
    echo "<h1 style= 'color:blue' >  $title </h1>";
    // I'm going to start learning PHP !!!
    echo '<h2>Hello PHP</h2>';
    echo '<br/>';
    echo 'Second Line';
    ?> 

    <?php 
        $name = "Gaurav Agarwal";
        $age = 16;
        $School = 'The Heritage School';
        $course = "PHP course";


        echo "My name is $name ";
        echo "<h1> My name is $name </h1>";
        echo "<h2> My age is $age</h2>";
        echo '<h3> My school name is : ' .$School. '</h3>';
       
    
    ?>
<?php require 'include/footer.php'?> 