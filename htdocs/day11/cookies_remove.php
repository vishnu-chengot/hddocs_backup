<?php
$cookiename ="corohealth";
$cookievalue ='VRCM3619';
$cookievalue = md5($cookievalue);

setcookie($cookiename,$cookievalue,time()+(86400));

if(isset($_COOKIE['corohealth'])){
  echo " your cookie name is:  ".$cookiename."  and value is  ".$_COOKIE['corohealth'];
}
else{
  echo 'cookie is not set';
}

// to remove cookie we want to reset cookie
setcookie($cookiename,"",time()-(3600));

if(isset($_COOKIE['corohealth'])){
  echo " your cookie name is:  ".$cookiename."  and value is  ".$_COOKIE['corohealth'];
}
else{
  echo 'cookie is not set';
}

?>

