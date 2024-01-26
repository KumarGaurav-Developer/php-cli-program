<?php
// wap in php to show odd and even without else statement and return statement
// without exit and without die() and without goto
$no =readline('Enter a no ');
$rem=$no%2;// 10---->rem=0
// 5=rem=1
$output='no is even';
if($rem==1){
$output='no is odd';
}
echo $output; 

// no is even
// no is odd 

?>