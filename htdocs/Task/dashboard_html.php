<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboardfinal</title>

<!-- --------------------------bootstrap link--------------------------------------- -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
<!-- --------------------------google font--------------------------------------- -->
  <link
  href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,700&display=swap"
  rel="stylesheet">

<!-- -------------------------------------fontawsome----------------------------------------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  
<!-- -----------------css link------------------------------------------- -->

<link rel="stylesheet" href="dashboard.css">
<?php
include('dashboard.php');
?>
  
</head>
<body>
  <nav class="navbar navbar-expand-lg  bg-light  fixed-top">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="#offcanvasScrolling" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand text-primary fs-3 fw-bold" href="#">Dashboard</a>
      
      
      <div class="dropdown mx-lg-4">
        <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Log Out</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button> -->

<div class="offcanvas offcanvas-start sidebar-nav rounded-4 border-0 " data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header text-dark">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel"></h5>
    <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
  </div>
  <div class="offcanvas-body text-secondary">
    <ul class="navbar-nav" id="nav-bar-item">
      <li class="nav-item">
        <a class="nav-link d-flex " aria-current="page" href="#"><i class="fa-solid fa-house me-3 fs-4"></i>
        <p class="fs-5">Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex " href="#"><i class="fa-solid fa-calendar-days me-3 fs-4"></i>
        <p class="fs-5">Registeration</p>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link d-flex " href=""><i class="fa-solid fa-user-group me-3 fs-4"></i>
        <p class="fs-5"></p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex " href="#"><i class="fa-solid fa-chart-column me-3 fs-4"></i>
        <p class="fs-5"></p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex " href="#"><i class="fa-solid fa-calendar-minus me-3 fs-4"></i> 
        <p class="fs-5"></p>
        </a>
      </li> -->
    </ul>
  </div>
</div>

<main>
<div class="container">
 <div class="alert  alert-success alert-dismissible fade show" role="alert" id="alert">
             
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <div class="card mt-5">
  <div class="card-header text-center fs-3 fw-bold">
    View student
  </div>
  <div class="card-body">
    
<div class="table-responsive">
  <table class="table table-sm table-hover">
  <thead>
    <tr>
      <th scope="col">serial no</th>
      <th scope="col">Profile</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <!-- <th scope="col">password</th> -->
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
      <td><img src="uploads/<?php echo $row["image"];?>" alt="student_pic" style="width:50px; height:50px;"></td>

      <td><?php echo $row["student_name"];?></td>
      <td><?php echo $row["email_id"];?></td>
      <!-- <td><?php echo $row["password"];?></td> -->
      <td><?php echo $row["phone_number"];?></td>
      <td><?php echo $row["gender"];?></td>
      <td><?php echo $row["course"];?></td>
      <td><?php echo $row["skill"];?></td>
      <td><?php echo $row["language"];?></td>
      <td hidden><?php echo $row["id"];?></td>
      <!-- <td><input type="text" class="form-control" id="seller_id" value="<?php echo $row["id"];?>"  name="id_feild" style="width:50px;"></td> -->
      <!-- <td><button type="submit" class="btn btn-danger" name="submit">Remove</button></td>
      <td><button type="submit" class="btn btn-success" name="edit">Edit</button></td> -->
      <td>
    <button  class="btn btn-danger" id="value" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick ="remove()">remove</button>

  <!-- <a  class="btn btn-danger" href="delete.php?student_id=<?php echo $row['id']?>" >Remove</a> -->
  
  <a  class="btn btn-primary" href="update_html.php?student_id=<?php echo $row["id"];?>" >Edit</a>
  
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
</div>


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
</main>


<script src="hover.js"></script>

 <script>
      function remove(){
      var selected_row = event.target.parentNode.parentNode
      var children = selected_row.childNodes
      
      // console.log(children[19].innerHTML)
      var modal =document.getElementById('hidden')
      modal.value = children[21].innerHTML


      }
    </script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
 


  

   
</body>
</html>