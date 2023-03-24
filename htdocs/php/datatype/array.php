<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form  method="POST">
  <input type="text" name="value"> <br> <br>
  <button name="btn" type="submit">submit</button>
  </form>
<?php
$name =$_POST['value'];
$color = array('red','black','white','orange','blue');

$arry_length = count($color);

for($i=0;$i<=$arry_length;$i++){
  if($color[$i]==$name){
    echo 'item found in postion '.$i;
  }
  // echo $color[$i] ."<br>";
}
 
?>
</body>
</html>
