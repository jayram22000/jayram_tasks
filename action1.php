<?php
$title= "Action1"; 
include "header.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age= $_POST['age'];
echo "<h4> Your voter name is $fname $lname /.
 and voter age $age</h4>";
?>

<?php include "footer.php" ?>   <!-- universal footer !-->