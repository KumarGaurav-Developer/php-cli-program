<?php                                                                 // algo: linear search                                                   problem:- to find a proper subset of a
// normal aaray
$arr=[10,20,30,40];                                                                 //b is  set to be proper set of a
echo in_array(10,$array);
echo PHP_EOL;
var_dump(in_array(10,$array));                                              // b if a and a=n(a)>n(b)
$a=[10,20,30,40,50,60,70,80,90];
echo in_array(50,$a);// true----------->1
$b=[20,40,60,80];
echo PHP_EOL;
// is $b is subset of $a
$counter=0;
foreach($b as $x=>$y){
if(in_arry($y,$a)){
$counter++;
}

 }
echo $counter;
if($counter==count($b) &&count($a)>count($b)){
echo 'b is  proper set of a';
}
else{
echo 'b  is not proper set of b';
}





?>