<?php
// local scope 


function hello(){
  $my_name = "vishnu";
  echo "<h1>my name is $my_name (inside function)</h1> "; #print with name
}
echo "<h3>my name is $my_name (outside function)</h3>"; #print without name 
hello()

?>