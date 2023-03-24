<?php

session_start();
if(!isset($_SESSION['admin'])){
    header("Location:login.php");
  
}
$msg = '';
if (isset($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
    echo '<script>setTimeout(function() { document.querySelector(".alert-danger").remove(); }, 3000);</script>';
    echo '<script>setTimeout(function() { document.querySelector(".alert-success").remove(); }, 3000);</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read_crud</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<?php
include('read.php');
?>
<style>
   body {
    background: #DE6262;
    background: -webkit-linear-gradient(to right, #FFB88C, #DE6262);
    background: linear-gradient(to right, #FFB88C, #DE6262);


  }
</style>
<body>
  
    <nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">HRMS</a>
    <form class="d-flex" role="search">
      
      <a class="btn btn-outline-success" href="destroy.php" >log out</a>
    </form>
  </div>
</nav>
   <div class="container">
 
    <div class="card mt-5">
  <div class="card-header text-center fs-3 fw-bold">
    Employee List
  </div>
  <div class="alert   alert-dismissible fade show mt-3" role="alert" id="alert">
              <?php echo $msg; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
  <div class="card-body">
    

  <table class="table">
  <thead>
    <tr>
      <th scope="col">serial no</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone number</th>
      <th scope="col">Department</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $n=0;
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $n++;
      ?>
    <tr>
      
      
      <td><?php /*echo $row["id"];*/ echo $n; ?></td>
      <td><?php echo $row["first_name"];?></td>
      <td><?php echo $row["last_name"];?></td>
      <td><?php echo $row["email_id"];?></td>
      <td><?php echo $row["phone_number"];?></td>
      <td><?php echo $row["emp_password"];?></td>
    <td><a class='btn btn-success' href="update.php?id=<?php echo $row["emp_id"];?>" >Update</a> 
    <a class='btn btn-danger' href="delete.php?id=<?php echo $row["emp_id"];?>">Delete</a></td> 
     

  
 
     
    </tr>
     <?php
      }
      
      ?>
    <?php #$conn->close(); ?>

    
  </tbody>
</table>

</div>
</div>
</div>
</body>
<script>
  const divAlert = document.querySelector('div.alert');
const str = divAlert.textContent.trim();

if (str === '') {
  divAlert.style.display = 'none';
} else {
  if (str === 'Username already exists') {
    divAlert.classList.add('alert-danger');
  } else {
    divAlert.classList.add('alert-success');
  }
}
</script>
</html>