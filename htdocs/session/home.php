<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:login.php");
}
$existingData =  file_get_contents('data.json');
   $existingArray =  json_decode($existingData, true);
foreach ($existingArray as $userDetails) {
    if ($userDetails['user_name'] == $_SESSION['user']) {
        $namedata = $userDetails['name'];
        $emaildata = $userDetails['email'];
        $phone = $userDetails['phoneNumber'];
        $user_name = $userDetails['user_name'];
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
  </head>
  <style>
      body{
        margin: 0px !important;
      }
      .size{
        height:  100px !important;
      }
      .height{
      height:600px !important;"
      }
    </style>
  <body>
    

  <div class="container-fluid ">
    <nav class="navbar navbar-expand-lg bg-danger mt-2 size">
  <div class="container-fluid">
    <a class="navbar-brand text-light fs-2 fw-bold" href="#">FoodPARK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light fs-5 fw-bold" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5 fw-bold" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light fs-5 fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5 fw-bold" href="#profile">My Profile</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        
        <a class="btn btn-outline-light btn-lg" href="destroy.php" >Log out</a>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item height" >
      <img src="images\food1.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item height">
      <img src="images\food4.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item height active ">
      <img src="images\food3.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark fs-2 fw-bold">Welcome </h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
   <div class="row mt-5">
          <div class="col-12">
            <div class="card" id="profile">
              <div class="card-header text-center fs-4 fw-bold">
                Profile
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <form method="post">
                      <tr>
                        <td hidden> <input type="text"  id="hidden" value="<?php echo $_SESSION['user']; ?>"> </td>
                      </tr>
                    <tr>
                      <th>Name</th>
                      <td id="name">
                        <?php  echo $namedata;?>  
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="col">Email address</th>
                      <td id="email">
                       
                        <?php  echo $emaildata;?>
                      </td>
                    </tr>

                    <tr>

                      <th scope="col">User name</th>
                      <td id="user_name">
                        <?php  echo $user_name;?>
                        
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">Phone Number</th>
                      <td id="phone">
                       
                        <?php  echo $phone;?>
                      </td>
                    </tr>
                    </form>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
  
  </div>
  <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>