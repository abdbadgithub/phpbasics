<?php
// function sum($number){
// for($i=0;$i<strlen($number);$i++){
// if($array[$i] == $word){
// $counter= $counter + 1;

// }
// }
// return $counter;
// }
// $str = "Hello world. It's a beautiful day. Hello";
// echo check($str,"Hello");
function sumofnumber ($number){
$sum=0;
for($i=0;$i<strlen($number);$i++){
$sum = $sum + $number[$i];
}
return $sum;
}


echo sumofnumber("12345");
?>