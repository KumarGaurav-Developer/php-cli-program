<?php
// wap to php iterate normal array
// wap to php to find sum avg of element in array

$arr=[10,20,40,30,50,60,70];
$total_no=count($arr);
echo $arr;
echo $total_no;
$sum=0;
echo PHP_EOL;
foreach($arr as $item){
echo $item;
echo PHP_EOL;
$sum=$sum+$item;
}
echo PHP_EOL;
echo $sum;
echo PHP_EOL;
$avg=$sum/$total_no;
echo $avg;




?>