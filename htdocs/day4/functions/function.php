<?php
#functin without argument and return value
function studentDetails(){
  echo "welcom to student details<br>";
}

studentDetails();

#defalut function with static variable scope
function studentCount(){
static $x = 0;
echo "student $x <br>";
$x++;
}

studentCount();
studentCount();
studentCount();
studentCount();
?>