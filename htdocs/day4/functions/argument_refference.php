<?php
function addingTen(&$arra){
  $limit = count($arra); 
for($i=0;$i<$limit;$i++){
  $arra[$i] =$arra[$i]+10;
}
}

$arra =array(1,2,3,4,5,6,7,8);
addingTen($arra);
foreach($arra as $y){
  echo "$y<br>";
}
?>