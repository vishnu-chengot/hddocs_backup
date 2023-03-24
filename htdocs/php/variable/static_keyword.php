
<?php

#static
function my_var(){
  static $num1 =0;
  $num2 =0;
  echo"static output ". $num1 . " non static output" .$num2."<br>";
 
  $num1++; #out will be incremented
  $num2++;  # num2 will re-initialise when the function get called

}
my_var();
my_var();
my_var();
my_var();

?>