<?php
$y ='abc';
$$y =200;
echo $y ."<br>"; #output will abc
echo $$y;  #output will  200
echo $abc; #output will be 200



?>