<?php
$title= "Execise: NO:4";
 include "header.php"?><!-- universal header !-->
<h3> Excise4.In-class Task Control flow and loops 08.02.2023 (controlflow.php)<h3>
<h2>1.Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not: </h2>
<?php
$name = $_SERVER['PHP_SELF'];
$filename = basename($name);
echo " It is " . date ("F" , fileatime($filename));
echo " Its  not holiday"
?>
<h2> 2.Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.<h2>
<?php 
$colour="red";
if ($colour == true)
    echo "The colour is red";
elseif($colour == false)
    echo "The colour is not red";
?>
<h2>3.Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h3>
<?php 

$total_score = 80; // Replace this value with the actual total score of the student

if ($total_score > 80) {
    echo "Excellent";
} elseif ($total_score >= 70 && $total_score <= 80) {
    echo "Great";
} elseif ($total_score >= 60 && $total_score < 70) {
    echo "Good";
} elseif ($total_score >= 50 && $total_score < 60) {
    echo "Pass";
} else {
    echo "Fail";
}
?>
<h4>4.Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h4>
<form action="action1.php" method ="post">
    <div class="row">
    <div class="col">
    <input type="text" name="fname" required placeholder="First name" class="form-control"> 
</div>
<div class="col">
    <input type="text"  name="lname"required placeholder="Last name" class="form-control">
</div>
<div class="col">
    <input type="text"  name="age"required placeholder="Age" class="form-control">
</div>
<input type="submit" value="Submit">
</div>
</form>
<h5>5.In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….
</h5>
<?php 
$userAgent = $_SERVER['HTTP_USER_AGENT'];

switch (true) {
    case strpos($userAgent, 'Chrome') !== false:
        echo "You are using Google Chrome";
        break;
    case strpos($userAgent, 'Firefox') !== false:
        echo "You are using Mozilla Firefox";
        break;
    case strpos($userAgent, 'Safari') !== false:
        echo "You are using Apple Safari";
        break;
    case strpos($userAgent, 'Edge') !== false:
        echo "You are using Microsoft Edge";
        break;
    default:
        echo "Your browser is not recognized";
        break;
}
?>

<?php include "footer.php" ?>   <!-- universal footer !-->