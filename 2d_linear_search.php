B B    <?php
$arr=[10,20,30,40,50,60];
$element=[10,20];
$positions=[];
foreach($element as $j=>$element){
// echo $element;
foreach($arr as $index =>$item){
if($item==$element){
$positions[$element]=$index;//$j,$item,$element= valid but $index =not valid
//$position[$item]=$index;// Associtive Array
//position[$j]=$index;  //numerical Array
echo $index;
echo PHP_EOL;
break;
}
}
}
//print_r($positions);
if(count($positions)==count($element)&& count($arr)>count($elements)){
echo 'it is proper set';
}
else{
echo 'it is not proper set';
}




?>