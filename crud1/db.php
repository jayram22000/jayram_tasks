<?php
$_servername = "db";
$username = "data1";
$password = "zack";
$dbname = "data1";
// creating connection
$conn = new mysqli($_servername, $username, $password, $dbname);

// check connection
if($conn->connect_error){
    die("connection fail:" .$conn->connect_error);
}
?>