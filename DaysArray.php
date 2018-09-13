<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/12/18
   
   DaysArray.php
-->
    <title>Days Array</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Days Array</h2>
    <?php
    // Array for the days if the week in English
    $days = "Sunday";
    $days = "Monday";
    $days = "Tuesday";
    $days = "Wednesday";
    $days = "Thursday";
    $days = "Friday";
    $days = "Saturday";
    
    echo "The days of the week in English are: ";
    //  Turns the days into a string
    $days = array ("Sunday, ", "Monday, ", "Tuesday, ", "Wednesday, ", "Thursday, ", "Friday, ", "Saturday ");
    
    echo "$days[0]";
    echo "$days[1]";
    echo "$days[2]";
    echo "$days[3]";
    echo "$days[4]";
    echo "$days[5]";
    echo "$days[6]</p>";
    
// The days of the week in French
    // Creates the days variables
    $days = "Dimanche";
    $days = "Lundi";
    $days = "Mardi";
    $days = "Mercredi";
    $days = "Jeudi";
    $days = "Vendredi";
    $days = "Samedi";
    
    echo "The days of the week in French are: ";
    // Adds the dates to string
    $days = array ("Dimanche, ", "Lundi, ", "Mardi, ", "Mercredi, ", "Jeudi, ", "Vendredi, ", "Samedi ");
    
    echo "$days[0]";
    echo "$days[1]";
    echo "$days[2]";
    echo "$days[3]";
    echo "$days[4]";
    echo "$days[5]";
    echo "$days[6]</p>";
    ?>
</body>

</html>
