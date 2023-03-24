<?php
abstract class programing{
  public $name;
  public function __construct($name){
    $this->name =$name; 
  }
  abstract public function printing_syntax();
}
class java extends programing{
  public function printing_syntax(){
        
    $intro =" we use 'system.out.println()' statement to show output in java! .Father of java is known as \"{$this->name} \"";

    return $intro;
  }
}

class python extends programing{
  public function printing_syntax(){
    $intro =" we use 'print()' statement to show output in python!.Father of Python is known as \"{$this->name} \"";

    return $intro;
  }
}

class php extends programing{
  public function printing_syntax(){
    $intro =" we use 'echo and print' statement to show output in php!.Father of Python is known as \"{$this->name}\"";

    return $intro;
  }
}

$course =new java('James Gosling OC');
echo $course->printing_syntax();
echo '<br>';
$course =new python('Guido van Rossum');
echo $course->printing_syntax();
echo '<br>';
$course =new php('Rasmus Lerdorf');
echo $course->printing_syntax();



?>
