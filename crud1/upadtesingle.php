<?php
$title = "update your info";
include '../header.php';
include 'db.php'; 
$a = $_GET['id'];
$result = mysqli_query($conn,"Select * from studentinfo where id='$a' ");
$row = mysqli_fetch_array($result);
?>
<h2> Update your information below </h2>
<form name="update" method="post" action="">
    <input type="text" name="fname" placeholder="First name" required value="<?php echo $row['fname'];?>"><br><br>
    <input type="text" name="lname" placeholder="Last name" required value="<?php echo $row['lname'];?>"><br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city'];?>"><br><br>
    <select name="groupid" value="<?php echo $row['groupid'];?>" >
<option value="BBCAP22"> BBCAP22</option>
<option value="BBCAP21"> BBCAP21</option>
<option value="others"> others</option>
</select><br><br>
<input type="submit" value="Update your info" name="update"> <br><br>
<input type="submit" value="Delete your info" name="delete"> <br><br>

</form>

<?php
if (isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname',
    lname='$lname' where id='$a' ");
    if($query){
        echo "<h2> your information is updated successfully </h2>";
    }
    else{ echo "Record NOt Modified";
    }
}if (isset($_POST['delete'])){
    $id = $_POST['id'];
    $query = mysqli_query($conn, "DELETE FROM studentinfo WHERE id='$id'");
    if($query){
        echo "<h2> Record has been deleted successfully </h2>";
    }
    else{
        echo "Record NOT Deleted";
    }
}


    include '../footer.php';
    ?>

    
