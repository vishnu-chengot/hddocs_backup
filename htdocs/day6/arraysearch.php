<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form  method="post">
  <label for="">Enter a value for search</label> <br> <br>
  <input type="text" style="height:30px; width: 200px; font-size:20px;" name="value"> <br> <br>
  <button type="submit">submit</button>
  </form>
  <?php
  $search =$_POST['value'];
  
  $arr1 =array("biriyani","dosa","revathi","thar","himalaya");
  foreach (arr1 as $i){
    if($i==$search){
      echo "$i item found in the array";
    }
  }
  echo $search;
  ?>
</body>
</html>