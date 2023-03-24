<?php

# choose a day using switch statement 
$key = 6;

switch($key){
  case '1':
    echo "<h1> day is monday </h1>";
  break;  
  case '2':
    echo "<h1> day is Tuesday </h1>";
  break;  
  case '3':
    echo "<h1> day is wednesday </h1>";
  break;  
  case '4':
    echo "<h1> day is Thursday </h1>";
  break;  
  case '5':
    echo "<h1> day is Friday </h1>";
  break;  
  case '6':
    echo "<h1> day is Saturday </h1>";
  break;  
  case '7':
    echo "<h1> day is Sunday </h1>";
  break; 
  default:
  echo "<h3>please choose a number between 1 and 7 </h3>" ;
}
?>
