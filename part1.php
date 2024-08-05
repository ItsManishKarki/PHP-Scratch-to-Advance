<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-The God of Website</title>
</head>
<body>
    <div class="container">
        <?php 
          // single line comment
          /*
            multiple
            lines
            comments
          */

          define ("pi","3.14"); // this is an defined constant value which can be used in this page

        ?>
    </div>

    <?php
        //VARIABLES
        echo "<h1>Variables</h1>";
        $var1 = 20;
        $var2 = 10;
        
        echo $var1;
        echo "<br>";

        echo $var2;
        echo "<br>";

        echo $var1 + $var2;
        echo "<br>";
    ?>

    <?php
     //Operators in PHP
    //  Airthmetic Operator
     echo "<h1>Airthmetic Operator</h1>";
      echo "The sum of var1 and var2 is:";
      echo "<br>";
      echo $var1 + $var2;
      echo "<br>";

      echo "The Subtraction of var1 and var2 is:";
      echo "<br>";
      echo $var1 - $var2;
      echo "<br>";

      echo "The Multiplication of var1 and var2 is:";
      echo "<br>";
      echo $var1 * $var2;
      echo "<br>";

      echo "The Division of var1 and var2 is:";
      echo "<br>";
      echo $var1 / $var2;
      echo "<br>";


    //  Assignment Operator
    echo "<h1>Assignment Operator</h1>";

      $newVar = $var1;
      echo "The value of the new var is:";
      $newVar +=1; // adds 1 to the existing value of newVar
      $newVar -=1; // Subs 1 to the existing value of newVar
      $newVar *=2; // Multi's 2 to the existing value of newVar
      $newVar /=2; // Divides 2 to the existing value of newVar
      echo $newVar;
      echo "<br>";

    //  Comparison Operator
      echo "<h1>Comparision Operators</h1>";
      echo "The Value of 1==4 is:";
      echo var_dump(1==4);
      echo "<br>";

      echo "The Value of 1<=4 is:";
      echo var_dump(1<=4);
      echo "<br>";

      echo "The Value of 1>=4 is:";
      echo var_dump(1>=4);
      echo "<br>";

      echo "The Value of 1!=4 is:";
      echo var_dump(1!=4);
      echo "<br>";


    //  Increment/Decrement Operator
    echo "<h1>Increment/Decrement Operator</h1>";

        echo $var1++;  // It prints the values first then adds 1 to the value
      //echo $var1--;    // It prints the values first then subs 1 to the value
     //echo ++$var1;    // It adds 1 to the value first then prints the values  
    //echo --$var1;     // It Subs 1 to the value first then prints the values
      echo "<br>";
      echo $var1;
      echo "<br>";

    //  Logical Operator
    //   AND (&&)
    //   OR (||)
    //   XOR 
    //   !
    echo "<h1>Logical Operators</h1>";


    //$myVar = (true and true);
    //$myVar = (false or true);
    $myVar = (true xor false);
    //$myVar = (false ! false);
    echo var_dump($myVar);
    echo "<br>";
    ?>

    <?php
      //DATA TYPES
      echo "<h1>DATA TYPES</h1>";
      echo "<br>";

    //   1. String
      $stvar = "this is a string value";
      echo var_dump($stvar);
      echo "<br>";
    //   2. Integer
      $int = 257;
      echo var_dump($int);
      echo "<br>";
    //   3. Float 
        $flt = 2.57;
        echo var_dump($flt);
        echo "<br>";
    //   4. Boolean 
        $bool = true;
        echo var_dump($bool);
        echo "<br>";
    //   5. Array 
    //   6. Object 


    echo pi; // used the constant value here

    ?>


</body>
</html>