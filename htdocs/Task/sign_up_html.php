<?php
// Start the session
// session_start();
// if(isset($_SESSION['customer'])){
//     header("Location:home.php");
  
// }

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
include("sign_up.php");
?>
<body>
  <main>
        <div class="container mt-5 pt-5">
        <div class="card">
          <div class="alert   alert-dismissible fade show mt-3" role="alert" id="alert">
             <?php echo $mainmsg;?> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="row g-0">
              <div class="col-md-5">
              
                <img src="istockphoto-1137712472-612x612.jpg" class="img-fluid rounded-start mt-5 mb-5 img-hidden border-end border-info" alt="...">
              
              </div>
              <div class="col-md-7">
                <div class="card-body mx-lg-5">
                  <h1 class="fs-3 text-muted mt-3">Sign As Teacher</h1>
                  <form method="POST">
                    <div class="form-floating mt-2">
                      
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="fname">
                      <label for="validationCustom01" class=" text-dark">Name</label>
                      <span class="error">
                      <?php echo "$nameerror"; ?>
                    </span>
                      
                    </div>
                    <!-- <div class="form-floating mt-2">
                      
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-3 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="lname">
                      <label for="validationCustom01" class=" text-dark fw-bold">Second name</label>
                      <span class="error">
                      <?php ?>
                    </span>
                      
                    </div> -->
                    <!-- <div class="form-floating mt-2">
                      
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="username">
                      <label for="validationCustom01" class=" text-dark">user name</label>
                      <span class="error">
                      <?php echo "$usernameerror"; ?>
                    </span>
                      
                    </div> -->
                    <div class="form-floating mt-2">
                      
                      <input type="number" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="phoneno">
                      <label for="validationCustom01" class=" text-dark">phone number</label>
                      <span class="error">
                      <?php echo "$phoneerror"; ?>
                    </span>
                      
                    </div>
                  
                    <div class="form-floating mt-2">
                      
                      <input type="text" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0"  placeholder="name@example.com" style="width: 100%;" name="email" id="emaildata">
                      <label for="validationCustom01" class=" text-dark">Email address</label>
                      <span class="error" id="error">
                      <?php echo "$emailerror"; ?>
                    </span>
                      
                    </div>
                  
                    <div class="form-floating mt-2">
                      <input type="password" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0" placeholder="Password" style="width: 100%;" name="password" id="password">
                      <label for="floatingPassword" class=" text-dark">Password</label>
                      <span class="error" id="pwd">
                      <?php echo "$passworderror"; ?>
                    </span>
                    </div>
                    <div class="form-floating mt-2">
                      <input type="password" class="form-control border-top-0  border-start-0  border-end-0 border-dark border border-2 rounded-0" placeholder="Password" style="width: 100%;" name="confor_password" id="cpassword">
                      <label for="floatingPassword" class=" text-dark">conform Password</label>
                      <span class="error" >
                      <?php echo "$passworderror"; ?>
                    </span>
                    <span id="cpwd"></span>
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
  <script>
    $(document).ready(function(){
      $('#emaildata').change(function(){
        data =$('#emaildata').val()
        // console.log(data)
        $.ajax({
          type:"POST",
          url:"ajax.php",
          // dataType:'json',
          data: {
            'emaildata': data
          },
          success:function(data){
            //  console.log(html(response))
            $('#error').html(data)
          }

        })

      }),
      $('#cpassword').change(function(){
        data =$('#cpassword').val()
        data1 =$('#password').val()

        // console.log(data)
        $.ajax({
          type:"POST",
          url:"password.php",
          // dataType:'json',
          data: {
            'password': data,
            'password1': data1,

          },
          success:function(data){
            //  console.log(html(response))
            $('#cpwd').html(data)
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
    if($.trim(str) ==="please fill all the feild")
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