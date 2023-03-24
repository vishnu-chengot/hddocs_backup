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
require('read.php');
 include('delete.php');
//  include('update.php');
// $seller_id = $row['id'];
//   echo $seller_id;
//   exit();
//   $sql = "DELETE FROM seller_tb WHERE id=$seller_id";


  
?>
<body>
   <div class="container">
 <div class="alert  alert-success alert-dismissible fade show" role="alert" id="alert">
             <?php echo $deletemsg;?> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
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
      <th scope="col">course</th>
      <th scope="col">skills</th>
      <th scope="col">Language</th>
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
      <td><?php echo $row["course"];?></td>
      <td><?php echo $row["skill"];?></td>
      <td><?php echo $row["language"];?></td>
      <td><?php echo $row["id"];?></td>
      <!-- <td><input type="text" class="form-control" id="seller_id" value="<?php echo $row["id"];?>"  name="id_feild" style="width:50px;"></td> -->
      <!-- <td><button type="submit" class="btn btn-danger" name="submit">Remove</button></td>
      <td><button type="submit" class="btn btn-success" name="edit">Edit</button></td> -->
      <td>
  <!-- <a  class="btn btn-danger" href="read_html.php?seller=<?php echo $row["id"];?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Remove</a> -->
  
  <button  class="btn btn-danger" id="value" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick ="remove()">remove</button>
  <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
  <!-- onclick="return confirm('Are you sure Delete this record?')" title="Delete" -->
  <!-- href="delete.php?delete=<?php echo $row['id']?>" -->
  
  <a  class="btn btn-primary" href="new_update_html.php?seller_id=<?php echo $row["id"];?>" >Edit</a>
  
</td>
     
    </tr>
     <?php
      }
      
      ?>
    <?php #$conn->close(); ?>

    
  </tbody>
</table>

</div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Warning!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Delete will lost all your data.are you sure!</h5>
      </div>
      <div class="modal-footer">
        
        <form method="post" action="delete.php">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <input type="text" id="hidden" name="hidden" hidden>
        <button type="submit" class="btn btn-primary" name="delete" value="1">conform</button>
        </form>
        
        
      </div>
    </div>
  </div>
</div>
<div class="mt-5">
<a href="create_html.php" class="btn btn-info">Register New!</a>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Launch demo modal
</button>

<!-- update Modal  -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
  
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
      function remove(){
      var selected_row = event.target.parentNode.parentNode
      var children = selected_row.childNodes
      
      // console.log(children[19].innerHTML)
      var modal =document.getElementById('hidden')
      modal.value = children[19].innerHTML


      }
    </script>
     <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
   $(document).ready(function(){
      
      str = $('div.alert').text();
   if($.trim(str) === "") {
     $('div.alert').hide();
   }
  //  else
  //  {
  //   if($.trim(str) ==="please fill all the feild")
  //   {
  //     $('div.alert').addClass("alert-danger");
  //   }
  //   else{
  //     $('div.alert').addClass("alert-success");
  //   }

  //  }
   })
</script>

</html>