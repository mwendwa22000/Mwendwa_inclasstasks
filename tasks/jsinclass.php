<?php
$title = "javascript Events and form validation";
include "header.php"
?>
<h2>A simple button to display date</h2>
<button onclick="this.innerHTML=Date()">Click to know date</button>
<h2>Make a button and a placeholder as a paragraph for the date</h2>
<button onclick="getElementbyid('p1').innerHTML=Date()">Click to know date</button>
<P id="p1"></P>

<h2>Change the background color</h2>
<form>
    <input type="color" id="background" onchange="changecolor()">
</form>
<h2>Change the font color</h2>
<form>
    <input type="color" id="fcolor" onchange="changefcolor()">
</form>
<h2>On mouse over & on mouse out</h2>

<span onmouseover ="this.style.color='blue';
this.style.backgroundColour='yellow';
this.style.fontSize='2em';" 
onmouseout=
"this.style.color='red';
this .style.backgroundColour='white';
this.style.fontSize='2em';">some text</span>

<?php

include "footer.php"?>

  
