<?php
// wap to odd even without using else and exit()
$no=readline('Enter a number');
$rem=$no%2;
if($rem==1){
echo 'no is odd';
die();
}
echo 'no is even';


?>