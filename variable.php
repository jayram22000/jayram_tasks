<?php
$title= "Execise:NO:3";
 include "header.php"?><!-- universal header !-->
<h3>  Exercise3.In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>


 <h2>
 1.Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print usingtag: Hello …., You are welcome to my site. <h2> 

<form action="action.php" method="post">
    <div class="row">
    <div class="col">
    <input type="text" name="fname" required placeholder="First name" class="form-control"> 
</div>
<div class="col">
    <input type="text"  name="lname"required placeholder="Last name" class="form-control">
</div>
<div class="col">
    <input type="text"  name="bdate"required placeholder="birthdate" class="form-control">
</div>
<div class="col">
    <input type="text"  name="color"required placeholder="select fav color" class="form-control">
</div>
    
    <input type="submit" value="Submit">
</div>
</form>
<?php include "footer.php" ?>   <!-- universal footer !-->