<?php $title= "Functions"; 
include'include/header.php'  
?>


    <?php
echo "<h1 style= 'color:blue' >  $title </h1>";
            function write_message(){
                echo "I'm studing user define functions on ". date('d-m-Y,l'). '<br>';
            }
            write_message();

            // only printing the value and not Storing 
            function add_numbers($num1,$num2){
                $ans = $num1+$num2;
                echo "Addition $num1 + $num2 = $ans <br>";
            }
            
            $num2=100;  
            add_numbers(2,5);
            add_numbers(50,$num2);

            // Function Return Value 
            function return_product($num1,$num2){
                $multi = $num1*$num2;
                return $multi;
            }

            $store_value=return_product(5,5);
            echo "Answer = $store_value <br>";

            // change the value of a varibale 
            function change_num(&$num){
                $num= $num+1;
            }

            $a=10;
            add_numbers($a,50);

            change_num($a); // helps to change the value permanently from here 
            add_numbers($a,50);
            
    ?>
    <?php require 'include/footer.php'?> 
