<?php
$title = "Reading Data from the database";
include '../layout/header.php';
include'db.php';
$sql="select*from studentinfo";
$results=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    echo"<table class='table'>
    <table> 
    <tr><th>ID</th><th>First Name</th><th>Last Name</th>
    th>City</th><th>Group ID</th><tr>
    <tr>
    <td>a href='updatesingle.php?=$row[id]'>$row[id]</a></td>
    <td>$row[fname]</td>
    <td>$row[lname]</td> 
    <td>$row[city]</td>
    <td>$row[groupid]</td>
    </tr>
    </table>";
    }
}
else
{
    echo"<No Results>";
}
$conn->close();
include '../layout/footer.php';

?>