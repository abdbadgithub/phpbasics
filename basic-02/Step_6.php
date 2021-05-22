<?php
$num = '54321';
$sum=0;
for($i=0;$i<strlen($num);$i++){
$sum += $num[$i];
}
echo $sum;
?>