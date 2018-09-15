<!doctype html>
<html>

<head>
    <!--
   Exercise 02_01_01
   Author: Jaggar Hample
   Date: 9/14/18
   
   DiceRoll.php
-->
    <title>Dice Roll</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="inital-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Dice Roll</h2>
    <?php
    $faceNamesSingular = array("one", "two", "three", "four", "five", "six");
    $faceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");
    $doublesCount = 0;
    $rollNumber = 1;
    define("NBR_ROLLS", 4);
    
    // Determines if the user rolls doubles
    function checkForDoubles($die1, $die2) {
       global $faceNamesSingular;
       global $faceNamesPlural;
        $returnValue = false;
       echo "Die 1: $die1<br>Die 2: $die2<br>";
       if($die1 === $die2){
           echo "The roll was double " . $faceNamesPlural[$die1 - 1] . ".<br>";
           $returnValue = true;
       }
       // If not doubles the else tells the user what they got
        else {
           echo "The roll was a " . $faceNamesSingular[$die1 - 1] . " and a " . $faceNamesSingular[$die2 - 1] . ".<br>";
           $returnValue = false;
       }
        return $returnValue;
    }
   
    // Gives the user text telling thema nickname of what they got
    function displayScoreText($score, $doubles) {
        // Doubles and nick names
        if ($doubles) {
            switch($score){
                case 2:
                    echo "You rolled snake eyes!<br>";
                    break;
                case 12:
                    echo "You rolled boxcard!<br>";
                    break;
            }
        }
        else{
            if ($score === 3) {
            echo "You rolled a loose deuce!<br>";
        }
            else if ($score === 5) {
            echo "You rolled a fever fiver!<br>";
        }
            else if ($score === 7) {
            echo "You rolled a natural!<br>";
        }
            else if ($score === 9) {
            echo "You rolled a nina!<br>";
        }
            else if ($score === 11) {
            echo "You rolled a yo!<br>";
        }
        else {
            echo "Your roll has no nickname <br>";
            }
        }
    }
    
    $dice = array();
    while($rollNumber <= NBR_ROLLS) {
        $dice[0] = rand(1, 6);
        $dice[1] = rand(1, 6);
        echo "<p>";
        $score = $dice[0] + $dice[1];
        echo "The total score for the roll was $score.<br>";
        $doubles = checkForDoubles($dice[0], $dice[1]);
        displayScoreText($score, $doubles);
        echo "</p>";
        if($doubles) {
        ++$doublesCount;
            }
        ++$rollNumber;
        }
    echo "<p>Doubles occured on $doublesCount of the " . NBR_ROLLS . ".</p>";
     ?>
</body>

</html>
