<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/14/18
   
   ConditionalScript.php
-->
    <title>Conditional Script</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Conditional Script</h2>
    <?php
    // Check to see if the variable is greater or e than 100
    function($intVariable, $result){
    if(){
    $intVariable = 75;
    $result = "";
    ($intVariable > 100) ? $result = '$intVariable is greater than 100':
    }
    else{
    $result = '$intVariable is less than equal to 100';
    echo '<h3>$result: ' . "$result</h3>";
        }
    }
     ?>
</body>

</html>

<!--
    function checkValue($intVariable, $result) {
       if() {
       $intVariable = 75;
        $result = "";
           ($intVariable > 100); 
        } 
        else { $result = '$intVariable is greater than 100':
       $result = '$intVariable is less than or equal to 100';
        echo '<h3>$result:' . "</h3>";
        }
       }
-->
