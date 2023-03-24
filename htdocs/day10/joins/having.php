<?php
include('databaseconnection.php');
$sql = "SELECT count(student_tb.id) ,department_tb.dpartment_name,department_tb.hod FROM student_tb RIGHT JOIN department_tb ON 
student_tb.department_fk = department_tb.id GROUP BY department_tb.dpartment_name,department_tb.hod HAVING count(student_tb.id) > 0 ORDER BY count(student_tb.id) ASC";
$result =$conn->query($sql);
// $row =$result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<div class="container">
  <div class="row">
  <div class="col-sm-12">
    <div class="card">
       <div class="card-header text-center">
     Having with INEER JOIN-operation
      </div>
      <div class="card-body">
      <table class="table">
  <thead>
    
    <tr>
     
      <th scope="col">Total number of student</th>
      
      <th scope="col">department</th>
      <th scope="col">HOD</th>


    </tr>
  </thead>
  <tbody>
    <?php
    while($row = $result->fetch_assoc()) {
      
      ?>
    <tr>
      <td><?php echo $row['count(student_tb.id)']?></td>
     
      <td><?php echo $row['dpartment_name']?></td>
      <td><?php echo $row['hod']?></td>
      
    </tr>
      <?php
      }
      
      ?>
    
  </tbody>
</table>
      </div>
    </div>
  </div>
  
</div>
</div>
  
</body>
</html>