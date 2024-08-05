<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        margin: auto;
        background-color: bisque;
        padding: 20px;
    }
</style>
<body>
    <div class="container">
        <h1>Let's dive right into PHP-Tutorial</h1>
        <?php
          $age = 25;
        // CONDITIONAL STATEMENTS [ IF | ELSEIF | ELSE]
          if ($age >= 18) {
            echo "You are eligible for partying";
          } elseif ($age == 12){
            echo "You are just a baby, drink your momma's milk instead of tequila";
          } else{
            echo "You can't go there partying.";
          }

          echo "<br>";


          // ARRAYS
          $languages = ["python", "GO", "C++", "C#", "JAVA"]; // Array is a collection of multiple values
            echo $languages [4];
            echo "<br>";
            echo count($languages);  // it counts the numbers of datas inside an array
          
        ?>
    </div>
</body>
</html>