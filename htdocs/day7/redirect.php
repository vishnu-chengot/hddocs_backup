<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>redirct</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
  <div class="container mt-5">
    <form  method="post">
    <select class="form-select fs-4"  style="width:200px; height:60px;" name="select">
  <option selected >select one</option>
  <option value="1">python</option>
  <option value="2">php</option>
  <option value="3">angular</option>
</select>
<button type="submit" class="btn btn-primary mt-5" name="submit">browse</button>
  </form>

  </div>

  
</body>
<?php
if(isset($_POST['submit'])){
  $value =$_POST['select'];

  switch($value){
    case "1":
      header('Location: https://www.tutorialspoint.com/python/index.htm');
      break;

    case "2":
      header('Location: https://www.w3schools.com/php/');  
      break;

    case "3":
      header('Location: https://www.w3schools.com/angular/default.asp');  
      break;

      default:
      echo "please select one option";
      // header('Location: http://localhost:8080/day7/redirect.php');
      


  }
}
?>
</html>