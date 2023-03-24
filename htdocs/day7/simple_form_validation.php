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
<?php
$nameerror = $passworderror = $phoneerror = $emailerror = $gendererror = "";
$namedata = $passworddata = $phonenumberdata = $emaildata  = $genderdata ="";

// define("length", 0);
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phonenumber = $_POST['phonenumber'];
  $gender = $_POST['flexRadioDefault'];
  

  $emailregex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
  $rexSafety = "/^([a-zA-Z' ]+)$/";
  $phoneregex = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";
  if (empty($_POST['name'])) {
    $nameerror =' please fill the field';



  } else {

    if (preg_match($rexSafety, $name)) {
      $nameerror = '<i class="fa-solid fa-check text-success"></i>';
      $namedata = $name;
    } else {

      $nameerror = 'bad name';
    }
  }
  if (empty($_POST['email'])) {

    $emailerror ='please fill the field';

  } else {
    if (preg_match($emailregex, $email)) {
      $emailerror = '<i class="fa-solid fa-check text-success"></i>';
      $emaildata = $email;
    } else {

      $emailerror = 'please fill valid email';
    }
  }
  if (empty($_POST['password'])) {
    $passworderror ='please fill the field';
  } else {
    if (strlen($password) > 12) {
      $passworderror = 'maxlength should be 12';
    } elseif (strlen($password) >= 8) {

      $passworderror = '<i class="fa-solid fa-check text-success"></i>';
      $passworddata = $password;
    } else {
      $passworderror = 'week';
    }
  }
  if (empty($_POST['phonenumber'])) {
    $phoneerror ='please fill the field';
  } else {
    if (strlen($phonenumber) > 9 and strlen($phonenumber) < 11) {
      $phoneerror = '<i class="fa-solid fa-check text-success"></i>';
      $phonenumberdata = $phonenumber;
    }
     elseif(preg_match($phoneregex,$phoneerror)){
      $phoneerror = 'perfect';

    }
    else {
      $phoneerror = 'should be 10 digit';
    }
  }
  if ($gender == '') {
    $gendererror = 'please select a option';

  }
   else {
    $gendererror = '<i class="fa-solid fa-check text-success"></i>';
    $genderdata = $gender;
  }



}
?>

<body>
  <div class="container">


    <di v class="row mt-5">
      <div class="col-12">


        <div class="card">
          <div class="card-header text-center fs-4 fw-bold">
            Form validation
          </div>
          <div class="card-body">
            <form method="post">
              <div class="row mt-5">

                <div class="col-6">

                  <div class="mb-3">
                    <label for="fnmae" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nmae" name="name">
                    <span class="error">
                      <?php echo "$nameerror"; ?>
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="email" name="email">
                    <span class="error">
                      <?php echo $emailerror; ?>
                    </span>

                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="error">
                      <?php echo $passworderror; ?>
                    </span>
                  </div>
                  <div class="mb-3">
                    <label for="phonenumber" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phonenumber" name="phonenumber">
                    <span class="error">
                      <?php echo $phoneerror; ?>
                    </span>
                  </div>



                </div>


                <!-- second part  -->

                <div class="col-6">


                  <div>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Gender

                    </label>
                  </div>
                  <div class="form-check">


                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                      value="Male">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                      value="Female">
                    <label class="form-check-label" for="flexRadioDefault2">
                      female
                    </label>

                  </div>
                  <span class="error">
                    <?php echo $gendererror; ?>
                  </span>

                 

                 


                </div>
                
                  <div class="mt-1">
                    <button type="submit" class="btn btn-primary mt-5" name="submit" id="btn" >Submit</button>
                  </div>
                </div>
            </form>
          </div>
        </div>



        <!-- </div> -->




        <div class="row mt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header text-center fs-4 fw-bold">
                User Data
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <td>
                        <?php echo $namedata; ?>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="col">Email address</th>
                      <td>
                        <?php echo $emaildata; ?>
                      </td>
                    </tr>

                    <tr>

                      <th scope="col">password</th>
                      <td>
                        <?php echo $passworddata; ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">Phone Number</th>
                      <td>
                        <?php echo $phonenumberdata; ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">Gender</th>
                      <td>
                        <?php echo $genderdata; ?>
                      </td>
                    </tr>
                    



                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>






  </div>






  <?php
  // if(isset($_POST['submit'])){
//   $msg = "";
//   $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
//   if(empty($_POST['fname']) && empty($_POST['sname']) && empty($_POST['email']) && empty($_POST['password']) && empty($_POST['phonenumber'])){
//     $msg = 'please fill the field';
  
  //   }
//   else {
//     $msg = 'perfect';
//   }
  
  //   // echo "<script>document.getElementsByClassName('error')[0].innerHTML ='$msg'</script>";
  
  //   // echo "<script>document.getElementById('error').value = '$msg'</script>";
//   if($msg == 'perfect'){
//     echo "<script>document.getElementById('error').innerHTML = '$msg';</script>";
//     echo "<script>document.getElementById('error').style.color = 'green';</script>";
//   }
//   else{
//     echo "<script>document.getElementById('error').innerHTML = '$msg';</script>";
//     echo "<script>document.getElementById('error').style.color = 'red';</script>";
//   }
  
  // }
  ?>

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