<?php
#array pointers 
$course = array("python","php","react","flutter","ruby");

echo current($course)."<br>";
echo next($course)."<br>";
echo prev($course)."<br>";
echo end($course)."<br>";
echo reset($course)."<br>";
echo key($course)."<br>";

?>