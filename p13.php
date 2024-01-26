<?php
// wap in php to show odd and even without if-else statement& without ternary
$output=['no is even','no is odd'];
        //index=0            index=1
$no =readline('Enter a no:');//no=5 rem=1;
$rem=$no%2;// rem=10 rem=0
echo $output[$rem];

//5(odd)> rem=1
// 6(even)> rem=0


?>