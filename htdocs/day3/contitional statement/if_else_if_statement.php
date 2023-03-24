<?php
# garde of student using if else if statement
$mark =99;
if($mark >= 90 and $mark <=100){
  echo "you socred A+";
} 
elseif($mark >= 80 and $mark <= 90){
  echo "you scored A";
}
elseif($mark >= 70 and $mark <= 80){
  echo "you scored B+";
}
elseif($mark >= 60 and $mark <= 70){
  echo "you scored B";
}
elseif($mark >= 50 and $mark <= 60){
  echo "you scored C+";
}
elseif($mark >= 40 and $mark <= 50){
  echo "you scored C";
}
elseif($mark >= 30 and $mark <= 40){
  echo "you scored D+";
}
else{
  echo "failed";
}
?>