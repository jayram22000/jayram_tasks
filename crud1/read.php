<?php
$title="reading data from database";
include '../header.php';
include 'db.php';
$sql = "Select * from studentinfo";
$result = $conn->query($sql);
if ($result->num_rows > 0){
     echo "<table class='table'>
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>Group ID</th>
        </tr>";
    while($row = $result->fetch_assoc()){
    echo"
    <tr>
   <td><a href='upadtesingle.php?id=$row[id]'>$row[id]</a></td>
    <td>$row[fname]</td>
    <td>$row[lname]</td>
    <td>$row[city]</td>
    <td>$row[groupid]</td>
    </tr>";
   
}
 echo " </table>";
}
else{
    echo"No Results";
    $conn->close();
    include '../footer.php';
}

?>

