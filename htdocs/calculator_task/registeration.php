<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  <div class="container">
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  <?php
  define("EMAIL", "vishnu.chengot@gmail.com");
  define("PASSWORD", 1234);
  // echo EMAIL;
  // echo PASSWORD;

  

  if(isset($_POST['submit'])){
   $email =$_POST['email'];
   $password =$_POST['password'];

  

   if( $email == EMAIL and (int)$password === PASSWORD){
    // echo 'your logined successfully';
    header("Location: http://www.example.com/another-page.php");
    exit();
   }
   else{
    echo "invalid credential";
   }

  }

  ?>
</body>
</html>