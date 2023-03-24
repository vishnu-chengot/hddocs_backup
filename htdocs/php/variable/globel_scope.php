<?php
// globel scope
$my_name = "vishnu";

function hello(){
  echo "<h1>my name is $my_name (inside function)</h1> ";
}
echo "<h4>my name is $my_name (outside function)</h4>";
hello()

?>