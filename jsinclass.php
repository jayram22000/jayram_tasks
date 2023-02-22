<?php
$title = "JavaScript Events and form validations";
include "header.php" ?>
<h2>simple buttton to display date </h2>
<button onclick="this.innHtml=Date()"> Click to know date </button>
<h2>make a button and a place holder as paragraph for the date </h2>
<button onblur="getElementById('p1').innHtml=Date()"> Click to know date </button>
<p id="p1"> </p>
<h2> change the background color </h2>
<form>
    <input type="color" id="background" onchange="changeColor()">
</form> 
<h2> change the font color</h2>
<form>
    <input type="color" id="fcolor" onchange="changefColor()">
</form> 
<h2>on mouse over and on mouse out </h2>
<span onmouseover="this.style.color='blue';
                  thgis.style.backgroundColor='yellow';
                  this.style.fontSize= '2em';"
                  onmouseout=
                  "this.style.color='red';
                  thgis.style.backgroundColor='white';
                  this.style.fontSize='1.1em';">
                  some</span>

        <?php include "footer.php" ?>