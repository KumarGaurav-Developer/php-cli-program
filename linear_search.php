      <?php
$arr=[50,40,30,23,03,04,04,];
$element=5 ;
$position=-1;
foreach($arr as $index=>$item){
echo $item,PHP_EOL;
if($item==$element){
$position=$index;
}
}
echo PHP_EOL;
echo'index last value=',$index;
echo PHP_EOL;
if($position>-1){
echo $element,'found in position',$position;
}
else{
echo $element,'note found';
}


 












?>