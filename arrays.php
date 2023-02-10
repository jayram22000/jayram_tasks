<?php
$title= "Exercise: Number 5"; 
include "header.php" ?>
<h2>1.Write a php script to display courses as list. Use 
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")</h2>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
$clength = count($courses3);
for($x = 0; $x < $clength; $x++){
    echo $courses3[$x];
    echo "<br>";
}
?>
<h2>2.The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys. </h2>
<?php
?>
<h2>3.Sort the following array </h2>
<?php
?>
<h2> 4.Change the following array's all values to upper case.</h2>
<?php include "footer.php" ?>