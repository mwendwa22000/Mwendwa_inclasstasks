<?php include"header.php" ?>
<?php 
$title="update your info";
include'../layout/header.php';
$a=$_GET['id'];
include 'db.php';
$result= mysqli_query($conn,"select*from studentinfo where id='$a'");
$row = mysqli_fetch_array($results);

?>
<h2>update your information below</h2>
<form name="update" method="post"action="">

<form action="" method="post">
    <input type="text" name="fname" placeholder="Fisrt Name" required value="<?php echo $row ['fname'];><br><br>
    <input type="text" name="lname" placeholder="Last Name"  required class="<?php echo $row ['lname'];><br><br>
    <input type="text" name="city" placeholder="City" required value>"<?php echo $row['city'];?>"><br><br>
    <select name="groupid" value="<=>
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="others">others</option>
    </select><br><br>
    <input type="submit" value="Submit" name="submit">    
    <input type="submit" value="Submit" name="submit">   

</form>

<?php

if (isset($_POST['UPDATE'])){
    $fname=&_POST['fname'];
    $lname=&_POST['lname'];
    $query=mysqli_query($conn,"uUPDATE studentinfo set fname='$fname',
    lname='$lname' where id='$a'");
    if($query){
        echo"<h2>your information is updated successfully</h2>";
    }
    else{echo"Record Not Modified";}

}
<?php include"footer.php" ?>