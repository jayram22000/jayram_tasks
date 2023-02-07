<?php
$title= "Execise:NO:3";
 include "header.php"?><!-- universal header !-->
<h3>  Exercise3.In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>


 <h2>
 1.Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print usingtag: Hello …., You are welcome to my site. <h2> 

<form action="action.php" method="post">
    <div class="row">
    <div class="col">
    <input type="text" name="fname" required placeholder="First name" class="form-control"> 
</div>
<div class="col">
    <input type="text"  name="lname"required placeholder="Last name" class="form-control">
</div>
<div class="col">
    <input type="text"  name="bdate"required placeholder="birthdate" class="form-control">
</div>
<div class="col">
    <input type="text"  name="color"required placeholder="select fav color" class="form-control">
</div>
    
    <input type="submit" value="Submit">
</div>
</form>
<h4> 4.Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)
</4>
<?PHP
$string1 = "string";
$string2 = "function";
$combined_string = $string1 . " " . $string2;
echo "The combined string is: " . $combined_string . "\n";
echo "The length of the combined string is: " . strlen($combined_string) . "\n";

?> 
<h4> 3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.</h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pekka</td>
      <td>5</td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Johanna</td>
      <td>4</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td> Jhon</td>
      <td>5</td>
    </tr>
  </tbody>
</table>
</table>
<h4> 5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</4>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

$sum = $num1 + $num2 + $num3;

echo "The sum of " . $num1 . ", " . $num2 . " and " . $num3 . " is: " . $sum;
?>
<h4> 6.Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER). </h4>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (strpos($user_agent, 'Firefox') !== false) {
    echo "You are using Firefox";
} elseif (strpos($user_agent, 'Chrome') !== false) {
    echo "You are using Chrome";
} elseif (strpos($user_agent, 'Opera') !== false) {
    echo "You are using Opera";
} elseif (strpos($user_agent, 'Safari') !== false) {
    echo "You are using Safari";
} elseif (strpos($user_agent, 'MSIE') !== false) {
    echo "You are using Internet Explorer";
} else {
    echo "Your browser could not be detected.";
}
?>
<h5> 7.Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file. (Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time)</5>

<?php include "footer.php" ?>   <!-- universal footer !-->