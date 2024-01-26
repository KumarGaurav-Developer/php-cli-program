<?php
// wap in php to show is_array()
$x=10;//flase
$y=true;//flase
$z=10.5;// flase
$arr=50;// flase
$arr1=[10,20,30,40];
$arr2=['name'=>'ravi','role'=>'hr','sal'=>7500];// true
print_r($x);
print_r(gettype($x));// flase
echo PHP_EOL;
print_r($y);// not array     false
print_r(gettype($y));
echo PHP_EOL;
print_r($z);//
print_r(gettype($z));
echo PHP_EOL;
print_r($arr);
print_r(gettype($arr));
echo PHP_EOL;
print_r($arr1);
print_r(gettype($arr1));
echo PHP_EOL;
print_r($arr2);
print_r(gettype($arr2));
echo PHP_EOL;
var_dump(is_array($x));
echo PHP_EOL;
var_dump(is_array($y));
echo PHP_EOL;
var_dump(is_array($z));
echo PHP_EOL;
var_dump(is_array($arr));
echo PHP_EOL;
var_dump(is_array($arr1));
echo PHP_EOL;
var_dump(is_array($arr2));
echo PHP_EOL;
















?>