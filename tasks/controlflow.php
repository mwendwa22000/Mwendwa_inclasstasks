<?php
$title="Control flow";
include "header.php"?>

<div class="container" styles="background-color:gray; alignment:center;">

<h1>1. Write a script that gets the current month 
then prints one of the following responses</h1>
<?php
$m=date("F");
if($m=="Aug"){
    echo"it\'s $m , so it\'s still holiday.";
}
else{
    echo"Not August, this is $m so I don't have any holidays";
}
?><br><br><br><br>


<h1>2.Assign colour red to a variable name</h1>
<?php
$color="red";
if($color=="red"){
    echo"The color is red.";
}
else{
    echo"The color is not red";
}
?><br><br><br><br>


<h1>3.Write a program to grade students based on their total score for a subject</h1>
<?php
$score=67;
if($score>=80){
    echo"Excellent";
}
elseif($score>=70&& $score<80){
    echo"Great";
}
elseif($score>=60&& $score<70){
    echo"Good";
}
elseif($score>=50&& $score<60){
    echo"Pass";
}
else{
    echo"Fail";
}
?><br><br><br><br>

<h1>4.Write a program to get inputs (age and name) from the user and based on their age</h1>
<form action="action1.php" method="Post">
<div class="row">
<div class="col-md-4">
Name: <input type="text" name="fname"  class="form-control"><br>
Age:  <input type="number" name="yage" class="form-control"><br>
<input type="submit" value="submit">
</div>
</div>
</form>

<br><br><br><br>
<h1>5.Use Switch statement with strops function to print the name of the browser as below</h1>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
      switch($user_agent) {
        case (strpos($user_agent,'edg')== true):
            echo 'You are using Microsoft Edge.';
            break;
        case (strpos ($user_agent,'Firefox')== true):
            echo 'You are using Mozilla Firefox.';
            break;
        case (strpos($user_agent,'Chrome')== true):
            echo 'You are using Google Chrome.';
            break;
        default:
            echo 'Your browser could not be determined.';
       } 


  ?>
</div>
<?php include "footer.php" ?>