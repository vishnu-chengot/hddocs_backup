<?php

session_start();
if(!isset($_SESSION['admin'])){
    header("Location:login.php");
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form validation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<style>
  .color {
    background: #556270;
    background: -webkit-linear-gradient(to right, #FF6B6B, #556270);
    background: linear-gradient(to right, #FF6B6B, #556270);



  }

  body {
    background: #DE6262;
    background: -webkit-linear-gradient(to right, #FFB88C, #DE6262);
    background: linear-gradient(to right, #FFB88C, #DE6262);


  }
</style>
<?php
include('crate.php');

?>

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
    <div class="row mt-5">
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-header text-center fs-4 fw-bold ">
            Employee Management
          </div>
          <div class="card-body">

            <div class="alert   alert-dismissible fade show" role="alert" id="alert">
              <?php echo $msg; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form method="post" enctype="multipart/form-data">
              <div class="row mt-5">

                <div class="col-8">

                  <div class="mb-3">
                    <label for="fname" class="form-label">First Name <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" id="first_name" name="fname">
                    <span id="first_name_error">

                    </span>
                  </div>
                  <div class="mb-3">
                    <label for="lname" class="form-label"> Last Name <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" id="second_name" name="lname">
                    <span id="second_name_error">

                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email address <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" id="emaildata" name="email">
                    <span id="email_error" >

                    </span>

                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Department </label>
                    <input type="text" class="form-control" id="password" name="password">
                    <span id="dpt_error">

                    </span>
                  </div>
                  <div class="mb-3">
                    <label for="phonenumber" class="form-label">Phone Numbe <span class="text-danger">*</span> </label>
                    <input type="number" class="form-control" id="phone" name="phonenumber">
                    <span id="phone_error">

                    </span>
                  </div>

                  <!-- paste here -->
                  <div>
                    <div class="mt-3 form-check">
                      <input type="checkbox" class="form-check-input" id="Checkbox1" name="check1"
                        onclick="validate()">
                      <label class="form-check-label" for="exampleCheck1">Terms and conditions</label>
                      <div>
                        <span class="error">

                        </span>
                      </div>

                    </div>
                    <div class="mt-1">
                      <button type="submit" class="btn btn-primary mt-5" name="submit" id="btn" disabled >Submit</button>
                      <a href="read_html.php" class="btn btn-primary mt-5">View Employee List</a>

                    </div>
                    <span class="error mt-5">

                    </span>
                  </div>

                </div>
                <!-- second part  -->
                <div class="col-6">

                </div>
                <!-- or else -->
              </div>
            </form>
          </div>
        </div>
        <div>
        </div>
      </div>
    </div>
    <script>
      limit = document.getElementsByClassName("error")


      for (let i = 0; i < limit.length; i++) {

        if (limit[i].innerHTML == "perfect") {
          limit[i].classList.add("text-success");

        } else {
          limit[i].style.color = 'red'

        }

      }
      
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function () {

        str = $('div.alert').text();
        if ($.trim(str) === "") {
          $('div.alert').hide();
        }
        else {
          if ($.trim(str) === "New record created successfully") {
            $('div.alert').addClass("alert-success");
          }
          else {
            $('div.alert').addClass("alert-danger");
          }

        }
      })
    </script>
    <script src="valiadtion.js"></script>

</body>

</html>