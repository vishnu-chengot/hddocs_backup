<?php
// Start the session
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:admin.php");
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="login.css">
</head>
<?php 
include('student_add.php')
?>
<body>
  <main>
        <div class="container mt-5 pt-5">
        <a  class="btn btn-outline-primary btn-lg mb-3"  href="destroy.php">Log out</a>

        <div class="card">
          
            <div class="row g-0">
              <div class="col-md-5">
              
                <img src="istockphoto-1137712472-612x612.jpg" class="img-fluid rounded-start mt-5 mb-5 img-hidden border-end border-info" alt="...">
              
              </div>
              <div class="col-md-7">
                <div class="card-body mx-lg-5">
                  <h1 class="fs-3 text-muted mt-3">Add student</h1>
                  <form method="POST">
                    <div class="form-floating mt-2">
                      
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="name">
                      <label for="validationCustom01" class=" text-dark">Name</label>
                    
                      
                    </div>
                    
                   
                    <div class="form-floating mt-2">
                      
                      <input type="number" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="phoneno">
                      <label for="validationCustom01" class=" text-dark">phone number</label>
                      
                      
                    </div>
                  
                    <div class="form-floating mt-2">
                      
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="email" id="emaildata">
                      <label for="validationCustom01" class=" text-dark">Email address</label>
                      
                      
                    </div>
                     <div class="form-floating mt-2">
                      
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="address">
                      <label for="validationCustom01" class=" text-dark">Address</label>
                      
                      
                    </div>
                  
                    <div class="form-floating mt-2">
                      <input type="password" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0" placeholder="Password" style="width: 100%;" name="password" id="password">
                      <label for="floatingPassword" class=" text-dark">Password</label>
                     
                    </div>
                   
                    <div class="mt-3">
                      <button type="button" class="btn btn-link text-decoration-none text-muted">Forgot Password?</button>
                      
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox"  id="Checkbox1" onclick="dissableButton()">
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-outline-primary btn-lg" name="submit" disabled id="btn">sign in</button>
                    </div>
                    </form>
                    <div class="mt-5 text-muted">
                      © 2022 HR-mithra (Digital Ecom Techno Pvt. Ltd.)
Privacy Policy
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        
    </main>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
    limit = document.getElementsByClassName("error")


    for (let i = 0; i < limit.length; i++) {

      if (limit[i].innerHTML == "perfect") {
        limit[i].classList.add("text-success");

      } else {
        limit[i].style.color = 'red'

      }

    }
    function dissableButton() {
      let checkbox = document.getElementById('Checkbox1')
      if (checkbox.checked == false) {
        document.getElementById('btn').disabled = true;

      }
      else {

        document.getElementById('btn').disabled = false;
      }
    }

  </script>
  
</body>

  
</html>