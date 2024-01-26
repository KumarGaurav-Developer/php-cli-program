<?php
// wap in php to show to odd and even without else statement
$no=readline('Enter no ');
$rem=$no%2;
if($rem==1){
echo 'no is odd';
return;
//break;=> it should inside switch or loop.
}
echo 'no is even';






?>