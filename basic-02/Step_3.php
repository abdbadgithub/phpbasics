<?php 
$a = 32;
$b = 45;

echo " a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;

echo " a =".$a." and b=".$b."\n";
?>