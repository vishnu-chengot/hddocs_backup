<?php
session_start();
if(!isset($_SESSION['teacher'])){
    header("Location:login_html.php");
  
}

?>
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
          <li><a class="dropdown-item" href="destroy.php">Log Out</a></li>
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
      <li class="nav-item ">
        <a class="nav-link d-flex " aria-current="page" href="old_dashboard.php"><i class="fa-solid fa-house me-3 fs-4"></i>
        <p class="fs-5">Dashboard</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link d-flex " href="registeration_html.php"><i class="fa-solid fa-calendar-days me-3 fs-4"></i>
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
  <div class="row mt-5">
    <div class="alert   alert-dismissible fade show mt-5" role="alert" id="alert">
             <?php echo $updatemsg;?> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    <?php
     while($row = $result->fetch_assoc()) {
    ?>
  <div class="col-sm-3 mt-5 mx-3">
    <div class="card">
      <div class="text-center mt-3">
       <img src="uploads/<?php echo $row["image"];?>" class="card-img-top" alt="..." style="width:200px; height:200px;">

      </div>
      <div class="card-body">
        <ul class="list-group list-group-flush">
    <li class="list-group-item Rclass"><span class="text-dark fw-bold">Name: </span><?php echo $row["student_name"];?></li>
    <li class="list-group-item"><span class="text-dark fw-bold">Email: </span> <?php echo $row["email_id"];?></li>
    <li class="list-group-item"><span class="text-dark fw-bold">Phone: </span> <?php echo $row["phone_number"];?></li>
    <li class="list-group-item"><span class="text-dark fw-bold">Course: </span> <?php echo $row["course"];?></li>
    <li class="list-group-item"><span class="text-dark fw-bold">Skill: </span> <?php echo $row["skill"];?></li>
    <li class="list-group-item"><span class="text-dark fw-bold">Language: </span> <?php echo $row["language"];?></li>
  </ul>
       
        <div class="card-body">
    <a  href="delete.php?student_id=<?php echo $row["id"];?>"  onclick ="return confirm('Are you sure want to delete?')"class="btn btn-danger">Remove</a>
    <a  href="update_html.php?student_id=<?php echo $row["id"];?>" class="btn btn-primary">Edit</a>
  </div>
      </div>
    </div>
  </div>
  <?php
       }
    ?>
  
  </div>
  

</main>

<script src="hover.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
   $(document).ready(function(){
      
      str = $('div.alert').text();
   if($.trim(str) === "") {
     $('div.alert').hide();
   }
   else
   {
    if($.trim(str) ==="error")
    {
      $('div.alert').addClass("alert-danger");
    }
    else{
      $('div.alert').addClass("alert-success");
    }

   }
   })
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
 


  

   
</body>
</html>