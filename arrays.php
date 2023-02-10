<?php
$title= "Exercise: Number 5"; 
include "header.php" ?>
<h2>1.  Write a php script to display courses as list</h2>
<?php
$courses=array("PHP","HTML","JavaScript","CMS","Project");
echo "I like " . $courses[0] . ", " . $courses[1] . " , " . $courses[2] . " , " . $courses[3] . " , " . $courses[4] .".";
?>
<br>
<br>
<h2> 2.The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.</h2>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[4]);
echo "I like " . $courses1[0] . " , " . $courses1[1] . " , " . $courses1[2] . " , " . $courses[3] .".";
?>
<br>
<br>
<h2> 3.Sort the following array </h2>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
$clength = count($courses3);

for($x = 0; $x < $clength; $x++){
    echo $courses3[$x];
    echo "<br>";
}
?>
<h2>4.Change the following array's all values to upper case.</h2>
<?php
//$courses4=array("php", "html", "javascript", "cms", "project");
$courses4[0] = "php";
$courses4[1] = "html";
$courses4[2] = "javascript";
$courses4[3] = "cms";
$courses4[4] = "project";
echo  strtoupper($courses4[0]);
?>
<br>
<h2>
<?php
echo  strtoupper($courses4[1]);
?>
<br>
<?php
echo  strtoupper($courses4[2]);
?>
<br>
<?php
echo  strtoupper($courses4[3]);
?>
<br>
<?php
echo  strtoupper($courses4[4]);
?>
<br>

<h2>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
</h2>
<?php

$color = array("Red"=>"#FF0000", "Lime"=>"#00FF00", "Blue"=>"#0000FF");
echo $color['Red'];
?>
<?php
echo $color['Lime'];
?>
<?php
echo $color['Blue'];
?>

<h2> 6.PHP script to calculate and display average temperature, five lowest and highest temperatures.</h2>
<?php

$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
/*explode - splits a string by a string*/
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
/*count - counts all elements in an array or countable object */
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
/* Sort- sorts an array in ascending order*/ 
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
/* Below is a for loop. It increases it's length to the specified length*/
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

?>

<?php include "footer.php" ?>