<?php
// wap to in php to show use of explode
$email='kg036972@gmail.com';
print_r($email);
echo PHP_EOL;
print_r(gettype($email));
$arr=explode('@',$email);
print_r($arr1);
$arr1=explode(',',$email);
print_r($arr1);

$arr2=explode('.',$email);
print_r($arr2);
$sentences="this is sentence of";
$arr_3=exlode('s',$sentences);
print_r($arr_3);
$arr_4=exlode(' ',$sentences);
print_r($arr_4);

$arr_5=str_split($email);
print_r($arr_5);










?>