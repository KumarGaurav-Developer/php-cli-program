<?php
// wap to php iterate normal array
// wap to php to find sum avg of element in array

$arr=[10,20,40,30,50,60,70];
$total_no=count($arr);
echo $arr;
echo $total_no;
$sum=0;
foreach($arr as $item){
echo $item;
echo PHP_EOL;
sleep(1);
echo 'sum befor=',$sum;
echo PHP_EOL;
sleep(1);
$sum=$sum+$item;
sleep(1);
echo 'sum after=',$sum;
echo PHP_EOL;
}
echo 'last item=$item';
echo PHP_EOL;
echo 'total sum=',$sum;
echo PHP_EOL;
$avg=$sum/$total_no;
echo 'Average=',$avg;




?>        