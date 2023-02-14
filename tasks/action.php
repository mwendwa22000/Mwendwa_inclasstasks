<?php include "header.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['bdate'];
$color= $_POST['color'];




echo"<h3>your name is $fname $lname/.
your favorite color is color $color
and your birth date $dob</h3>";
?>

<?php include "footer.php" ?>


