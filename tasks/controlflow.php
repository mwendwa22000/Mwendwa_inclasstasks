<?php include"header.php" ?>

<h>Write a script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not:</h1>

<?php
echo date('F') . "<br>";
//echo "Not August, this is . " + gmdate(" F") + " . so I don't have any holidays";
if (date('F')) {
  echo "Not August, this is ." . date('F') . ". so I don't have any holidays";
} else {
  echo "It's August, so it's still holiday.";
}
?>
<br>
<br>

<h2>Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.
</h2>

<?php
function output1()
{
  $color = "red";
  if ($color = "red") {
    echo "The color is red.";
  } else {
    echo "The color is not red.";
  }
  echo output1();
}
?>
<h3>
Write a program to grade students based on their total score for a subject. </h3>
<?php

$score = 20;
$excellent = 80;
$great = 70;
$good = 60;
$fail = 50;
if ($score > 80) {
  echo "Excellent!";
} else if ($score >= 70) {
  echo "Great!";
} else if ($score >= 60) {
  echo "Good!";
} else if ($score <= 50) {
  echo "Fail";
}

?>

<h>
Write a program to get inputs (age and name) from the user and based on their age,
 decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,
</h>

<form method="post" action="">

  Name: <input type="text" name="name" required>
  Age: <input type="text" name="age" required>
  <input type="submit" name="submit" value="Submit">
</form>
<?php

if (isset($_POST['submit'])) {

  $age = $_POST["age"];
  if ($age > 18) {
    echo "You're eligible to vote";
  } else {
    echo "You're not eligible to vote";
  }
}
?>

<h>
Write a program to get inputs (age and name) from the user and based on their age, 
decide if he/she is eligible for voting. 
(18 or more than 18 years is eligible for voting,)
</h>

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$browser = "Mozilla";
switch ($user_agent) {
  case (strpos($user_agent, 'Mozilla') == true);
}



?>
<?php include"footer.php" ?>