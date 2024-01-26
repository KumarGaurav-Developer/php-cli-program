<?php
// array declaration in php 
$x=10;
$arr=[10,20,30,40];// normal array;
echo getType($arr);
echo PHP_EOL;
echo gettype($x);
echo PHP_EOL;
echo $x;

//note:- echo can print only primitive(int,float,char,double,string,long,bool)
// it is because by default return type of echo is string.
echo $arr;// since it is not primmite datatype------->Array()--------> Array to string conversion Error

stringwalaArray  =  implode(',',$arr);// converting array to and string  and joining them by
echo PHP_EOL;
echo gettype($stringwalaArray);// here all the members or them item will joined by,
echo PHP_EOL;
echo $StringwalaArray;


?>
