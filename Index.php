<?php

require("master.php");
 
 $MultidimensionalArrays = array(

 	'Wakiso' => array(
     
     'Muvule tree' => 569,
     'Eucalyptus' => 80003,
     'Musizi' => 767363,
     'Musabu' => 8984,
 	),

 	'Kabale' => array(

     'Muvule tree' => 69,
     'Eucalyptus' => 803,
     'Musizi' => 7363,
     'Musabu' =>89,
 	),

     'kabale' => array(

     'Muvule tree' => 90,
     'Eucalyptus' => 703,
     'Musizi' => 763,
     'Musabu' =>29,  
     ),
 );

foreach ($MultidimensionalArrays as $index => $value) {

 	echo "==" .$index. "==<br><br>" ;
	foreach ($value as $key => $trees) {
 		echo $key. "=" .$trees. "<br>";
 	}
 }

$sumofalltrees=array(569,80003,767363,8984,69,803,7363,89,90,703,763,29);
echo "Sum of all trees is " .array_sum($sumofalltrees). "in both districts<br><br>";

setcookie('sum_of_all_trees','866828',time()+3600);

echo"Total number of trees in both disctricts is"  .$_COOKIE ['sum_of_all_trees'].  "stored in a cookie <br><br>";

$sumofmusabutrees=array(8984,89,29);
echo "sum of musabu trees is"  .array_sum($sumofmusabutrees).  "in both districts<br><br>";

session_start();
$_SESSION['musabu'] ="9102";
echo "Total number of Musabu trees is" .$_SESSION['musabu']. "stored in a session<br><br>";

$sumofalltreesinwakiso=array(569, 80003, 767363,8984);
echo "Wakiso=" .array_sum($sumofalltreesinwakiso). "trees<br><br>";

$sumofalltreesinKabale=array(69,803,7363,89);
echo "Kabale=".array_sum($sumofalltreesinKabale). "trees<br><br>";

$sumofalltreesinkabale=array(90,703,763,29);
echo "kabale=".array_sum($sumofalltreesinkabale). "trees<br><br>";
