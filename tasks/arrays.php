<?php include"l.header.php" ?>
<?php
$courses=array("PHP","HTML","JavaScript","CMS","Project");
echo "I like " . $courses[0] . ", " . $courses[1] . " , " . $courses[2] . " , " . $courses[3] . " , " . $courses[4] .".";
?>
<br>
<br>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[4]);
echo "I like " . $courses1[0] . " , " . $courses1[1] . " , " . $courses1[2] . " , " . $courses[3] .".";
?>
<br>
<br>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
"<br>";
ksort($courses3);
"<br>";
arsort($courses3);
"<br>";
krsort($courses3);
"<br>";
//$courses4=array("php", "html", "javascript", "cms", "project");
$courses4[0] = "php";
$courses4[1] = "html";
$courses4[2] = "javascript";
$courses4[3] = "cms";
$courses4[4] = "project";
echo  strtoupper($courses4[0]);
?>
<br>
<?php
echo  strtoupper($courses4[1]);
?>
<br>
<?php
echo  strtoupper($courses4[2]);
?>
<br>
<?php
echo  strtoupper($courses4[3]);
?>
<br>
<?php
echo  strtoupper($courses4[4]);
?>
<br>


<?php

$color = array("Red"=>"#FF0000", "Lime"=>"#00FF00", "Blue"=>"#0000FF");
echo $color['Red'];
?>
<?php
echo $color['Lime'];
?>
<?php
echo $color['Blue'];
?>
<?php
  

  
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
/*explode - splits a string by a string*/
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
/*count - counts all elements in an array or countable object */
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
/* Sort- sorts an array in ascending order*/ 
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
/* Below is a for loop. It increases it's length to the specified length*/
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

?>
<?php include"l.footer.php" ?>