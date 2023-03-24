<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update_crud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<?php
include('update.php');
// include("delete.php");
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
                     <input type="text" class="form-control" value="<?php echo $row['course'] ?>" name="new_course">

                      </td>
                    </tr>
                    <tr>
                      <th scope="col">Skill</th>
                      <td>
                      <input type="text" class="form-control" value="<?php echo $row['skill'] ?>" name="new_skill">

                      </td>
                    </tr>
                    <th scope="col">Lanaguage</th>
                    <td>
                    <input type="text" class="form-control" value="<?php echo $row['language'] ?>" name="new_language">

                    </td>
                    </tr>


                    <tr>
                      <td>
                        <button class="btn btn-success btn-lg" type="submit" name="submit" onclick='return confirm("data updated sucessfully")'>Update!!</button>
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