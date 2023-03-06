<?php ?>
<?php
$title="Index page";
include "header.php"?>
<div class="container" styles="background-color:gray; alignment:center;">
<h3>In-class Task Variable & Operators 07.02.2023</h3>

Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using 
 tag: Hello …., You are welcome to my site

</h2>
<div class="container" styles="background-color:grey; alignment:center;">
<form action="action.php" method="post">
<div class="row">
<div class="col">
Firstname: <input type="text" name="fname" placeholder="first name" class="form-control"><br><br>
Lastname: <input type="text" name="lname" placeholder="last name" class="form-control"><br><br>
</div>
<div class="col">
Birth date:<input type="date" name="bdate" class="form-control" ><br><br>
Select fav color: <input type="color" name="color" class="form-control" ><br><br>
<input type="submit" value="submit">
</div>
</div>
</form>
</div><br>
<h2>Prepare a simple html table and apply bootstrap style to the table. 
    You may use the same table that you did in 3.5.</h2>
    <?php
   $g1=5; 
   $g2=4; 
   $g3=5;
   ?>
    <?php
   echo "
   <table class='table table-dark table-striped-columns'>
   <tr>
   <th>S.N</th><th>Name</th><th>Grade</th>
   </tr>
   <tr>
   <td>1</td><td>pekka</td><td>$g1</td><br>
   </tr>
   <tr>
   <td>2</td><td>Johanna</td><td>$g2</td><br>
   </tr>
   <tr>
   <td>3</td><td>John</td><td>$g3</td><br>
   </tr>
   </table>
   ";
   ?><br><br>
   <h2>Write a PHP script with two string variables. Assign any text to these variables.
     Join them together.  Print the length of the string</h2>
     <?php
     $a = "Niyobyiringiro";
     $b = "Aisha";
     $c=$a.$b;
     echo"$c \n";
     echo "The length of the strings is: ";
     echo strlen($c);
     ?><br><br>
    <h2>Write a script to add up the numbers: 298, 234, 46.
         Use variables to store these numbers and echo statement to output your answer.</h2> 
         <?php  
         $num1=298;
         $num2=234;
         $num3=46;
         echo "sum is: ";
         echo $num1+$num2+$num3;

        ?><br><br>
     <h2>Write a PHP script to detect the browser being used to view your pages.
         (Use predefined variables: $_SERVER) </h2> 
         <?php
         echo $_SERVER['HTTP_USER_AGENT'];
         ?><br><br>
    <h2>Write a PHP script in the footer section of your universal footer just below the 
        Copyright information to display the last modification time of a file</h2>

    
</div>
<?php include "footer.php" ?>
