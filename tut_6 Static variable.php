<?php
  function static_var()
  {
    static $num1 = 3; // static Variable 
    $num2 = 6;   // Non static variable  
    //increment in non-static variable
    $num2++;
     //increment in static variable  
     $num1++;
     echo "Static:" .$num1."</br>";
     echo "non Static:".$num2."</br>";

  }
  //first function call 
static_var();
static_var();
static_var();
static_var();

?>