
<?php
// wap in php to show  addition in array
$x=[10];
$y=[100];
print_r($y+$x);//$y
echo PHP_EOL;
print_r($x+$y);//$x
echo PHP_EOL;
print_r($x+$x);//$X
echo PHP_EOL;
print_r($y+$y);//$y
$x=[10,20];
$y=[200];
print_r($y+$x);//$y--------->100,20
echo PHP_EOL;
print_r($x+$y);//$x----> 10,20
echo PHP_EOL;
print_r($x+$x);// 10,20
echo PHP_EOL;
print_r($y+$y);//200
echo PHP_EOL;
?>