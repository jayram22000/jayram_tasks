
<?php
$title= "Exercise: calculator"; 
include "header.php" ?>
<form action="" method="get">
<input type="float" placeholder="enter your first number" name=num1 required>
<input type="float" placeholder="enter your second number" name=num2 required>
<select name="operator">
    <option value="add">add</option>
    <option value="sub">subtract</option>
    <option value="mul">multiple</option> 
    <option value="div"> divide</option>
  </select>
<input type="submit" name="cal" value="calculator">
</form>
<?php
if (isset($_GET["cal"])){
$num1=$_GET["num1"];
$num2=$_GET["num2"];
$operator=$_GET["operator"];
switch($operator){
  case "add";
  $result=$num1 + $num2;
  break; 
  case "sub";
  $result=$num1 - $num2;
  break; 
  case "mul";
  $result=$num1 * $num2;
  break; 
  case "div";
  $result=$num1 / $num2;
  break; 
  default:
  $result = "error: You have not selected the correct operator";
}
}
if(isset($result)){
    echo "<h2> Result:$result</h2>";
}

?>
<?php include "footer.php" ?>   <!-- universal footer !-->
