
<h1>Calculator</h1>
    <form method="Get">
        
    <label> First Number:</label> <input type="text" name="v1" placeholder="Enter first number" required><br>
    <label> Operator:</label><input type="text" name="opr" size="25" required><br>
    <label> Second Number:</label><input type="text" name="v2" placeholder="Enter second number" required><br>
    
    
    <input type="submit" name="calculate" value="Click me">
    </form>

    <?php
    if (isset($_GET['calculate'])) {
        $num1 = $_GET['v1'];
        $opr = $_GET['opr'];
        $num2 = $_GET['v2'];
       

        if ($opr == "-") 
            echo $num1 - $num2;

         elseif ($opr == '+') 
            echo $num1 + $num2;
            
         elseif ($opr == '*') 
            
            echo $num1 * $num2;
        
         elseif ($opr == '/') 
            
            echo $num1 / $num2;
        else{

            echo "invalid operator </br>";
            
             
        }
   
    }

    ?>