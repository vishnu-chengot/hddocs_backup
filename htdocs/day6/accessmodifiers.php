<?php
class course{
public  $course;
public $fee;
  function setCourse($course,$fee){   #we can set as private by adding access modifiers
    $this->course =$course;
    $this->fee =$fee;

  }

  function getCourse(){
    return "$this->course will cost you $this->fee ";
  }
}

$student = new course();
// $student->course ="php";
// $student->fee=1200;

echo $student->getCourse();

?>