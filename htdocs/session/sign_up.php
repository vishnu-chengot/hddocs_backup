<?php
// Start the session
session_start();
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
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="login.css">
</head>

<body>
  <main>
        <div class="container mt-5 pt-5">
        <div class="card">
          <div class="alert   alert-dismissible fade show mt-3" role="alert" id="alert">
              <?php echo $msg; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="row g-0">
              <div class="col-md-5">
              
                <img src="istockphoto-1137712472-612x612.jpg" 
                class="img-fluid rounded-start mt-5 mb-5 img-hidden border-end border-info" alt="...">
              
              </div>
              <div class="col-md-7">
                <div class="card-body mx-lg-5">
                  <h1 class="fs-3 text-muted mt-3">Sign in to your account</h1>
                  <form method="POST" action="save_data1.php">
                    <div class="form-floating mt-2">
                      
                      <input type="text" 
                      class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  
                      placeholder="name@example.com" style="width: 100%;" name="fname" id="name">
                      <label for="validationCustom01" class=" text-dark">Name</label>
                      <span class="error">
                    
                    </span>
                      
                    </div>
                   
                    <div class="form-floating mt-2">
                      
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="username" id="user_name">
                      <label for="validationCustom01" class=" text-dark">User Name</label>
                      <span class="error">
                     
                    </span>
                      
                    </div>
                    <div class="form-floating mt-2">
                      
                      <input type="number" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="phoneno" id="phone">
                      <label for="validationCustom01" class=" text-dark">phone number</label>
                      <span class="error">
                    
                    </span>
                      
                    </div>
                  
                    <div class="form-floating mt-2">
                      
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="email" id="emaildata">
                      <label for="validationCustom01" class=" text-dark">Email address</label>
                      <span class="error" id="error">
                      
                    </span>
                      
                    </div>
                  
                    <div class="form-floating mt-2">
                      <input type="password" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0" placeholder="Password" style="width: 100%;" name="password" id="password">
                      <label for="floatingPassword" class=" text-dark">Password</label>
                      <span class="error" id="pwd">
                     
                    </span>
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
    <!-- <script src="sign_up.js"></script> -->
<script>
   
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
  <script>
     var divAlert = document.querySelector('div.alert');
  var str = divAlert.textContent.trim();

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
</body>
</html>