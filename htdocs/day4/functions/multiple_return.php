<?php
function payRoll($salary,$days,$status=0){
if ($status ==1){
  return $salary*$days;
}
else{
  return "your not a current employee";
}

}
 echo payRoll(300,28,0);
?>