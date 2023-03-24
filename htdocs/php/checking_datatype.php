<?php

#checking numberic or string
$num1 =10;
var_dump(is_int($num1));
echo '<br>';

$num2 =10.3;
var_dump(is_float($num2));
echo '<br>';

$str = 'hello';
var_dump(is_string($str));

echo '<br>';
var_dump(is_numeric($str));
echo '<br>';

$me =FALSE;
var_dump(is_bool($me));

?>