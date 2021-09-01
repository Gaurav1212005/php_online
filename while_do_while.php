<?php $title= "Do While "; 
include'include/header.php'  
?>


<?php 
echo "<h1 style= 'color:blue' >  $title </h1>";
$a = 5; 
while ($a <= 10) {
    echo"Count: $a";
    $a++;
}

?><?php require 'include/footer.php'?> 