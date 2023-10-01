<?php
  echo "Local variable</br>";
  function local_var()
  {
     $num = 56; // Local variable 
     echo "Local variable declared inside the function is:</br>".$num,"</br>";
       
  }
  local_var();
  "</br>";

//Global variable
 echo "Global variable : </br>";

 $name = "Eisa Baloch ";

  function global_var()
  {
     global $name;
     echo "Variable inside in the functjion :</br>".$name;
     echo "</br.>";

  }
  global_var();

  echo "</br> Varable outside the function: ".$name;


?>

<?php

$num1 = 5;      //global variable  

$num2 = 13;     //global variable  

function global_variable()  

{  

        $sum = $GLOBALS['num1'] + $GLOBALS['num2'];  

        echo "</br>Sum of global variables is: " .$sum;  

}  

global_variable();

?>