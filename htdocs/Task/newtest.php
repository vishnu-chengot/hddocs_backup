<?php

if(isset($_POST['submit'])){
$img =$_FILES['img']['name'];
// $img =$_FILES['img'];

// $temp_name =$_FILES['img']['tmp_name'];
// var_dump($img);
// echo "$img";
// echo "$temp_name";
 $path = pathinfo($img);
 var_dump($path);
 echo file_exists("uploads/".$img);
echo $path['extension'];
// move_uploaded_file($temp_name,"uploads/".$img);
// echo "<script>alert('hai')</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="dashboard.css">

</head>
<body>
  <form  method="post" enctype="multipart/form-data">
  <input type="file" class="form-control" id="inputGroupFile01" name="img">
  <input type="submit" name="submit">

  

  </form>
  <script src="hover.js"></script>

</body>
</html>