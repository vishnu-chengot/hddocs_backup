<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, seller_name,email_id,password,phone_number,gender  FROM seller_tb";
$result = $conn->query($sql);

if(isset($_POST['submit']) ){
  // $conn = new mysqli($servername, $username, $password, $dbname);
  $seller_id =$_POST['id_feild'];
  
  $sql = "DELETE FROM seller_tb WHERE id=$seller_id";
  echo $seller_id;
  if($conn->query($sql) === TRUE){
    echo'deleted';
  }

}


?>
<body>
  <div class="container">
    <div class="card mt-5">
  <div class="card-header text-center fs-3 fw-bold">
    Listed Seller
  </div>
  <div class="card-body">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">serial no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
      <th scope="col">phone number</th>
      <th scope="col">gender</th>
      <th scope="col"></th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $n=0;
      while($row = $result->fetch_assoc()) {
        $n++;
      ?>
    <tr>
      
      
      <td><?php /*echo $row["id"];*/ echo $n; ?></td>
      <td><?php echo $row["seller_name"];?></td>
      <td><?php echo $row["email_id"];?></td>
      <td><?php echo $row["password"];?></td>
      <td><?php echo $row["phone_number"];?></td>
      <td><?php echo $row["gender"];?></td>
      <form  method="post">
      <td><input type="text" class="form-control" id="seller_id" value="<?php echo $row["id"];?>"  name="id_feild"></td>
      <!-- <td><button type="submit" class="btn btn-danger" name="submit">Remove</button></td>
      <td><button type="submit" class="btn btn-success" name="edit">Edit</button></td> -->
      <td>
  <button type="submit" class="btn btn-danger" name="submit">Remove</button>
  </form>
  <a  class="btn btn-primary" href="update.php?seller_id=<?php echo $row["id"];?>">Edit</a>
  
</td>
     
    </tr>
     <?php
      }
      
      ?>
    <?php $conn->close(); ?>

    
  </tbody>
</table>
</div>
</div>
</div>
  
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>