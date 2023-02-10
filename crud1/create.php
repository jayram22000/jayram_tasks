<?php
$title= "A simple CRUD APP";
 include "../header.php";
 ?>
<form method="post" action="">
    <input type="text" name="fname" placeholder="first name" required><br>
    <input type="text" name="lname" placeholder="last name" required><br>
    <input type="text" name="city" placeholder="city" required><br>
    <select name="groupid">
<option value="BBCAP22"> BBCAP22</option>
<option value="BBCAP21"> BBCAP21</option>
<option value="others"> others</option>
</select><br><br>
<input type="submit" value="submit" name="submit">
<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $groupid=$_POST['groupid'];
    include 'db.php';
    $sql = "insert into studentinfo(fname,lname,city,groupid)
    values('$fname','$lname','$city','$groupid')";
    if($conn ->query($sql) === TRUE){
        echo "your information is added sucessfully";
    }
    else{
        echo "echo:" .$conn->error;
    }
}
?>
<?php include "../footer.php";
?>