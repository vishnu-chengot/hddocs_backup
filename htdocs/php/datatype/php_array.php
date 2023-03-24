<?php


//php array 

$course =array('php','python','angular','flutter');

$limit = count($course);

for ($i=0; $i < $limit; $i++) { 
  echo $i+1,' ' .$course[$i].'<br>';
}



$place = array("palakkad",'kozhikode','malappuram','wyanad');

foreach($place as $x){
  echo $x++.'<br>';
}

?>