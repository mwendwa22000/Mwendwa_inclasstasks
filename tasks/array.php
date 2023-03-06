<?php
$title="Array";
include "header.php"?>
<div class="container" styles="background-color:gray; alignment:center;">

<h1>calculator</h1>
<form action=""  method="GET">
<div class="row">
<div class="col-md-4">
 <input type="number" placeholder="first number" name="num1"  class="form-control" required><br>
 <input type="number" placeholder="second number" name="num2" class="form-control" required><br>
 
 <select name="operator">
    <option value="add">Add</option>
    <option value="sub">Subtraction</option>
    <option value="mult">Product</option>
    <option value="div">Divide</option>
 </select>
<input type="submit" name="cal" value="Calculate">
</div>
</div>
</form>
<?php

 if(isset($_GET["cal"])){
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $operator=$_GET["operator"];
    switch($operator){
        case "add":
            $result=$num1+$num2;
          break;
          case "sub":
            $result=$num1-$num2;
          break;
          case "mult":
            $result=$num1*$num2;
          break;
          default:
            $result=$num1/$num2;
          break;
          }
          
 }
 if(isset($result)){
    echo"<h2>Result: $result</h2>";
 } 
 
?>
<h1> 1.Write a php script to display courses as list</h1>
<?php
 $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
 echo"the elements of this array: ";
 for($i=0; $i<count($courses); $i++){
    echo"<br>$courses[$i]";
 }
?>
<h1> 2.The unset() function is used to remove element from the array</h1>
<?php
 $courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
 echo"the elements of this array courses1: ";
 print_r(array_values($courses1));
 unset($courses1[3]); 
 print_r(array_values($courses1));
?>
 <h1> 3.Sort the following array</h1>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
$courses4=array("p"=>"PHP", "h"=>"HTML", "j"=>"JavaScript", "s"=>"CMS","y"=> "Project");
 echo"<h2>a) ascending order sort by value</h2><br>";
 asort($courses4);
 foreach($courses4 as $i=>$i_value){
   echo "$i=$i_value" ."<br>";
 }
 echo"<h2>b) ascending order sort by Key </h2><br>";
  ksort($courses4);
   foreach($courses4 as $i=>$i_value){
      echo "$i=$i_value" ."<br>";
   }
 echo"<h2>c) descending order sort by Value</h2><br>";
  arsort($courses4);
  foreach($courses4 as $i=>$i_value){
   echo "$i=$i_value" ."<br>";
}
 echo"<h2>d) descending order sort by Key </h2><br>";
  krsort($courses4);
  foreach($courses4 as $i=>$i_value){
   echo "$i=$i_value" ."<br>";
}
 ?>
 <h1> 4.Change the following array's all values to upper case.</h1>
 <?php
 $courses41=array("php", "html", "javascript", "cms", "project");
 $len=count($courses41);
 for($i=0; $i<$len; $i++){
    $uppercourse= strtoupper($courses41[$i]);
    echo $uppercourse."<br>";
}
 ?>
 <h1> 5.List all your favorite colors and their hexadecimal equivalents.</h1>
 <?php
$Colors = array("#FF0000" => " Red", "#800000" => "Maroon", "#00FFFF" => "Aqua", "	#000080" => "Navy", "#800080" => "Purple");
   echo "<h3> My Fav colrs and their hexadecimals</h3><br>"; 
foreach($Colors as $i => $value){
        echo " $i = $value <br>";
    }
?>
<h1> 6.PHP script to calculate and display average temperature, five lowest and highest temperatures..</h1>
<?php
 echo "<hr><h2> Calculation average temperature: </h2>";
 $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
 /*what is explode and what does the below code do? : 
  explode is a function that is used to separate a string into different elements.
  this temp_array's values were initialized as a string so the code below used explode to 
  separate those number using the separate operator.
 */
 $temp_array = explode(',', $month_temp);
 $tot_temp = 0;
 /* What is count? it is a function used to get the number of elements an array hence making it easy
  to print the five lowest numbers.
 */
 $temp_array_length = count($temp_array);
 foreach($temp_array as $temp)
 {
  $tot_temp += $temp;
 }
  $avg_high_temp = $tot_temp/$temp_array_length;
  echo "Average Temperature is : ".$avg_high_temp."
 "; 
 // what does sort do? Sort is a function that arrange elements of an array in ascending order.
 //in this case it is used to sort elements of temp_array in ascending order.
 sort($temp_array);
 echo "<br> List of five lowest temperatures :";
 for ($i=0; $i< 5; $i++)
 { 
 echo $temp_array[$i].", ";
 }
 echo "<br>List of five highest temperatures :";
 /* explain the following loop: in this loop variable i is given the index of the fifth highest 
 element and as long as the value of i is less than the length of the temp_array, the loop prints
 the value at that index and then i is incremented to the next value untill the value of i is not 
 less than the length of temp_array.
 */
 for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
 {
 echo $temp_array[$i].", ";
 }
 
?>
</div>
<?php include "footer.php" ?>