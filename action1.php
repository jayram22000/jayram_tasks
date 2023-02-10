<?php
$title= "Action1"; 
include "header.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age= $_POST['age'];
if($age>=18)
echo "<h4> eligible for voting </h4>";
elseif($age<18)
echo "<h4> is not eligible for voting </4>";   


?>

<?php include "footer.php" ?>   <!-- universal footer !-->