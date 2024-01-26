<?php
// wap  in php to show ,implode function
   $array=[10,20,30,40];
echo gettype($array);// array
print_r($array);
echo PHP_EOL;
$str=implode('-',$array);
echo $str;
echo PHP_EOL;
print_r(gettype($str));// string
 











?>