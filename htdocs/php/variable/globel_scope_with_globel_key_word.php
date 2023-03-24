<?php

#globel scope
$x=10;
$y =20;
$pro =0;
function product(){
global $x,$y,$pro; #use globel keyword to represent globel variable
$pro =$x*$y;

}
product();  
echo $pro;  #output can be accessed outside the function because of globel key word

?>