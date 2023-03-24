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
  <label for="">Enter a string:</label>
  <input type="text" name="string"> <br> <br>
  <label for="">Enter a letter you want to remove:</label>
  <input type="text" name="r_letter">  <br> <br>
  <button type="submit" name="submit">continue</button>
  </form>
  <?php
  if(isset($_POST['submit'])){
    $string =$_POST['string'];
    $r_letter =$_POST['r_letter'];
  //   $letters_array =[];
  //   $limit =strlen($string);
   

  //  for ($i=0;$i<$limit;$i++){
  //   if($string[$i] != ""){
  //   $letters_array []= $string[$i];
  // }
  // }
  // $key = array_search($r_letter, $letters_array);
  // echo "<br>";
  // print_r($letters_array);
  // echo "<br> <br>";
  // unset($letters_array[$key]);
  
  echo "final array after removeing letter<br> <br>";
  print_r(explode("$r_letter",$string));
  
  // echo "<h1>$key</h1>";
  }
  ?>
</body>
</html>
