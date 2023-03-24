<?php
# * pattern printing using for loop

$limit =5;
 
for ($i =1 ;$i<$limit;$i++){
for($j =0;$j<$limit-$i;$j++){
  echo "&nbsp;";
  
}for($k =0;$k<($i*2)-1;$k++){
  echo "1";
} echo "<br>";
}
?>