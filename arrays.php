<?php
$title= "Exercise: Number 5"; 
include "header.php" ?>
<h2>1.Write a php script to display courses as list. Use 
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")</h2>
<?php
$courses=("PHP","HTML","JavaScript","CMS","Project");
for ($i=0; < count($courses);$i++){
    echo $courses[$i];
}
?>
<h2>2.The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys. </h2>
<?php

<?php include "footer.php" ?>