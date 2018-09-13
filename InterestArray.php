<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/12/18
   
   InterestArray.php
-->
    <title>Interest Array</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Interest Array</h2>
    <?php
    // Sets variables and values
    $interestRate1 = .0725;
    $interestRate2 = .0750;
    $interestRate3 = .0775;
    $interestRate4 = .0800;
    $interestRate5 = .0825;
    $interestRate6 = .0850;
    $interestRate7 = .0875;
    
    // Create the array for the values or variables
    $ratesArray = array(".0725", ".0750", ".0775", ".0800", ".0825", ".0850", ".0875");
    
    // Sets variables to the values
    echo "$interestRate1[0]";
    echo "$interestRate2[1]";
    echo "$interestRate3[2]";
    echo "$interestRate4[3]";
    echo "$interestRate5[4]";
    echo "$interestRate6[5]";
    echo "$interestRate7[6]";
    
    // Formats the array 
    echo "<pre>";
    print_r($ratesArray);
    echo "</pre>";
    ?>
</body>

</html>
