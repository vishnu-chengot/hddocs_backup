<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html> -->


<?php
$name ="vishnu";
$remove ='h';
// $limit =strlen($name);
// $letters_array =[];

// for ($i=0;$i<=$limit;$i++){
//   if($name[$i] != ""){
//     $letters_array []= $name[$i];
//   }
// }
// print_r($letters_array);

$my_array = preg_split('',$name, -1, PREG_SPLIT_NO_EMPTY);
$value ='i';
$key = array_search($value, $my_array);
unset($my_array[$key]);


echo"$key";
print_r($my_array);

?>