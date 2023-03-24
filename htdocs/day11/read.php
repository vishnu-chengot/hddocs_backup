<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<?php
include('readphp.php');
?>

<body>
  <table border>
  <thead>
    <tr>
      <th scope="col">serial no</th>
      <th scope="col">Name</th>
      <th scope="col">phone number</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">password</th>
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
      <td><?php echo $row["student_name"];?></td>
      <td><?php echo $row["phone"];?></td>
      <td><?php echo $row["email_id"];?></td>
      <td><?php echo $row["address"];?></td>
      <td><?php echo $row["password"];?></td>
      
     
      <td>

  <a  class="btn btn-primary" href="delete.php?seller_id=<?php echo $row["id"];?>" >Delete</a>
  <a  class="btn btn-primary" href="update.php?seller_id=<?php echo $row["id"];?>" >Edit</a>
  
</td>
     
    </tr>
     <?php
      }
      
      ?>
    <?php #$conn->close(); ?>

    
  </tbody>
</table>
  
</body>
</html>