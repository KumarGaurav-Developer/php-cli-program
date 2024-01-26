<?php
// wap to show associtive using foreach
$details=array(
'empname'=>'ravi kumar',
'empid'=>'emp1001',
'email'=>'ravi@infotech.company',
'role'=>'developer',
'salary'=>1000,
'password'=>12345);
foreach($details as $detail){

echo $detail;
echo PHP_EOL;
}
echo PHP_EOL;   
print_r($details);

foreach($details as $key=>$value){


echo $key;
echo PHP_EOL;
echo $value;
echo PHP_EOL;
}
echo PHP_EOL;
echo 'hiding data using key';
echo PHP_EOL;
foreach($details as key=>$value){
if($key!='password' and $key!='salary'){
echo $value;
echo PHP_EOL;
}
}
foreach($details as $key=> $value){
if(!in_array($key,['salary','password'])){
echo $value;
echo PHP_EOL;
}
}


?> 