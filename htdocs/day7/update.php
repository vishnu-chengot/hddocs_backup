<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Document</title>
</head>
<?php 
// include('databaseview.php');
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "mydb";
$seller_id = $_GET['seller_id'];
echo $seller_id;
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT *  FROM seller_tb WHERE id =$seller_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if(isset($_POST['submit'])){
//  $conn = new mysqli($servername, $username, $password, $dbname); 
$new_name =$_POST['new_name'];
$new_email =$_POST['new_email'];
$new_phone_number =$_POST['new_phone_number'];
$new_gender =$_POST['new_gender'];
$sql = "UPDATE seller_tb SET seller_name = '$new_name ',email_id ='$new_email' ,phone_number =$new_phone_number,gender='$new_gender' WHERE id= $seller_id";
if($conn->query($sql) === TRUE){
echo"sucessfully updated";
}


}



?>
<body>
  <div class="container">
   <div class="row mt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header text-center fs-4 fw-bold">
                <?php echo "welcome ".$row['seller_name'];?>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <form method="post">
                    <tr>
                      <th scope="col">Name</th>
                      <td>
                          <input type="text" class="form-control" value="<?php echo $row['seller_name'] ?>" name="new_name">

                        
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="col">Email address</th>
                      <td>
                        <input type="text" class="form-control" value="<?php echo $row['email_id'] ;?>" name="new_email">
                        
                      </td>
                    </tr>

                    <tr>

                      <th scope="col">password</th>
                      <td>
                        <input type="text" class="form-control" value="<?php echo $row['password'] ?>" disabled>
                        
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">Phone Number</th>
                      <td>
                        <input type="text" class="form-control" value="<?php echo $row['phone_number'] ?>" name="new_phone_number">
                        
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">Gender</th>
                      <td>
                        <input type="text" class="form-control" value="<?php echo $row['gender'] ?>" name="new_gender">
                        
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="col">Course</th>
                      <td>
                        <?php  ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">Skill</th>
                      <td>
                        <?php  ?>
                      </td>
                    </tr>
                    <th scope="col">Lanaguage</th>
                    <td>
                      <?php  ?>
                    </td>
                    </tr>


                    <tr>
                      <td>
                        <button class="btn btn-success btn-lg" type="submit" name="submit">Update!!</button>
                        <a class="btn btn-primary btn-lg" href="databaseview.php">Back</a>
                    </td>
                    </tr>
                    </form>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
</body>
</html>