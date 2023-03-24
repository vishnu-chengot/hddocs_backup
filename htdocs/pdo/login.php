<?php
// Start the session
session_start();
if(isset($_SESSION['admin'])){
    header("Location:create_html.php");
  
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

?>
<body>
  <div class="container">
   <main>
        <div class="container mt-5 pt-5">
        <div class="card">
           <div class="alert   alert-dismissible fade show mt-3" role="alert" id="alert">
             
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="row g-0">
              <div class="col-md-5">
              
                <img src="istockphoto-1137712472-612x612.jpg" class="img-fluid rounded-start mt-5 mb-5 img-hidden border-end border-info" alt="...">
              
              </div>
              <div class="col-md-7">
                <div class="card-body mx-lg-5">
                  <h1 class="fs-3 text-muted mt-3">Login to your account</h1>
                  <form  method="POST" action="login_code.php">
                  
                    <div class="form-floating mt-4">
                      <!-- <div class="input-group has-validation"> -->
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-primary border border-2 rounded-0"  placeholder="name@example.com" style="width: 50%;" name="cname" id="logindata">
                      <label for="validationCustom01" class=" text-dark">User Name<span class="text-danger">*</span></label>
                      <span id="error" class="text-success"></span>
                      
                    </div>
                  
                    <div class="form-floating mt-4">
                      <input type="password" class="form-control border-top-0  border-start-0  border-end-0 border-primary border border-2 rounded-0" id="floatingPassword" placeholder="Password" style="width: 50%;" name="cpassword">
                      <label for="floatingPassword" class=" text-dark">Password<span class="text-danger">*</span></label>
                    </div>
                    <div class="mt-3">
                      <button type="button" class="btn btn-link text-decoration-none text-muted">Forgot Password?</button>
                      
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="submit" class="btn btn-outline-primary btn-lg" name="submit">sign in</button>
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
    
  
  </div>
      <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
      <script>
    $(document).ready(function(){
      $('#logindata').change(function(){
        data =$('#logindata').val()
        console.log(data)
        $.ajax({
          type:"POST",
          url:"ajax1.php",
          // dataType:'json',
          data: {
            'emaildata': data
          },
          success:function(data){
            //  console.log(html(data))
            $('#error').html(data)

          }

        })

      })
      
    })
  </script>

  <script>
     $(document).ready(function(){
      
      str = $('div.alert').text();
   if($.trim(str) === "") {
     $('div.alert').hide();
   }
   else
   {
    if($.trim(str) ==="invalid cerdential")
    {
      $('div.alert').addClass("alert-danger");
    }
    else{
      $('div.alert').addClass("alert-success");
    }

   }
   })
  </script>
  
</body>
</html>