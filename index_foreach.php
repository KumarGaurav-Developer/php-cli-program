<?php
$arr=['ravi','10',100,false,10.5,true,null];
print_r($arr);
foreach($arr as $index => $value){
echo $index;
echo PHP_EOL;
echo $value;
echo PHP_EOL;
}
foreach($arr as $index => $value){
if($index%2==0){
echo $value;
echo PHP_EOL;
}
}





?>