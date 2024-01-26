<?php
$keys_arr=['name','salary','dept','mobile'];// count==4
$value_arr=['ravi',1000,'HR',9876543210];// count==4
$result_arr=[];
print_r($result_arr);
// count of key array must be equal to count of value array
$result_arr=array_combine($keys_arr,$value_arr);
print_r($result_arr);


?>