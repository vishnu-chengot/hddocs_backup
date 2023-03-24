<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
  <input type="text" name='name'>
  <button type="submit">submit</button>
  </form>
<?php
$name =$_POST['name'];
$name1 = $name;
$name_reverse = strrev($name);

if($name_reverse==$name1){
  echo 'string is palindrom';
}
else{
  echo 'string is not palindrom';
}

?>
</body>
</html>
