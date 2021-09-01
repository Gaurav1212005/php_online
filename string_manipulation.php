<?php $title= "String"; 
include'include/header.php'  
?>

    <hr>
    

    <?php
    echo "<h1 style= 'color:blue' >  $title </h1>";
    $name= " gaurav agarwal ";
    $name1= " Gaurav Agarwal ";
    $sentence1="Hello, how are you?";
    $sentence2="I'm doing PHP!!";
    echo $sentence1." What are you doing? ".$sentence2. '<br/>' ;
    echo "<hr>";
    
    //Upercase
    echo "Upercase first letter: ". ucfirst($name) . '<br/>';
    echo "Upercase first letter of each word: ". ucwords($name) . '<br/>';
    echo "Upercase the phrase: ". strtoupper($sentence1) . '<br/>';    
      
    //Lowercase
    echo "Lowercase first letter: ". lcfirst($name1) . '<br/>';
    echo "Lowercase the phrase: ". strtolower($sentence2) . '<br/>'; 
    echo "<hr/>";

    //Substracting 
    echo "Find: " .substr ($name,3,8). '<br>';

    //Repeat
    echo "Repeat the word: " . str_repeat($name,5) . '<br/>' ; 
    echo "Nested repeat+uppercase: ". str_repeat(strtoupper($name),5) . '<br>';

    //Find the position 
    echo "Get the position the letter: " . strpos($name,'w') . '<br/>' ; 
    echo "Get the position the letter: " . strpos($name,'g') . '<br/>' ; 

    // Charater
    echo "Search the chararter the letter: " . strchr($name,'r') . '<br/>' ; 

    //Lenght 
    echo "Lenght of the phrase: " . strlen($name);
    echo "<hr/>";

    //Trim 
    echo "Remove the gap: G" .trim("  A U R A "). "V" .'<br>';
    echo "Remove the gap: G" .ltrim("  A U R A "). "V" .'<br>';
    echo "Remove the gap: G" .rtrim("  A U R A ")."V" .'<br>';

    //Replace 
    echo "Replace the word: " . str_ireplace("how","who",$sentence1). '<hr>';

    echo "<h2 style = 'color : red'>Thank You</h3>";
    ?>
    
    <hr>
    <?php require 'include/footer.php'?> 