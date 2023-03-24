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
  .color{
  background: #556270;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FF6B6B, #556270);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FF6B6B, #556270); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


  }
  body{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }
</style>
<?php
// $dataarry = [];
$nameerror = $passworderror = $phoneerror = $emailerror = $gendererror = $courseerror = $checkerror  = $multiselecterror = $languageerror = "";
$namedata = $passworddata = $phonenumberdata = $emaildata = $coursedata = $genderdata = $multiselectdata = $languagedata = $new_languagedata= $skilldata= $mainerror="";

// define("length", 0);
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phonenumber = $_POST['phonenumber'];
  $gender = $_POST['flexRadioDefault'];
  $course = $_POST['course'];

  $emailregex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
  $rexSafety = "/^([a-zA-Z' ]+)$/";
  $phoneregex = "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/";

  $flag =0;
  


  function data($value,$key){
    global $dataarry;
    $dataarry[$key] =$value;
  }

  if (empty($_POST['name'])) {
    $nameerror =' please fill the field';



  } else {

    if (preg_match($rexSafety, $name)) {
      $nameerror = '<i class="fa-solid fa-check text-success"></i>';
      // $namedata = $name;
      // data($name,'name');
      $flag +=1;
    } else {

      $nameerror = 'bad name';
    }
  }
  if (empty($_POST['email'])) {

    $emailerror ='please fill the field';

  } else {
    if (preg_match($emailregex, $email)) {
      $emailerror = '<i class="fa-solid fa-check text-success"></i>';
      // $emaildata = $email;
      // data($email,'email');
      $flag +=1;
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
      // $passworddata = $password;
      // data($password,'password');
      $flag +=1;
    } else {
      $passworderror = 'week';
    }
  }
  if (empty($_POST['phonenumber'])) {
    $phoneerror ='please fill the field';
  } else {
    if (strlen($phonenumber) > 9 and strlen($phonenumber) < 11) {
      $phoneerror = '<i class="fa-solid fa-check text-success"></i>';
      // $phonenumberdata = $phonenumber;
      // data($phonenumber,'phonenumber');
      $flag +=1;

    }
    //  elseif(preg_match($phoneregex,$phoneerror)){
    //   $phoneerror = 'perfect';

    // }
    else {
      $phoneerror = 'should be 10 digit';
    }
  }
  if ($gender == '') {
    $gendererror = 'please select a option';

  }
   else {
    $gendererror = '<i class="fa-solid fa-check text-success"></i>';
    // $genderdata = $gender;
    // data($gender,'gender');
    $flag +=1;
    
  }
if ($course == 'select course'){
    $courseerror = 'please select';

}else{
    $courseerror ='<i class="fa-solid fa-check text-success"></i>';
    
    // $coursedata = $course;
    // data($course,'course');
    $flag +=1;
}
if(isset($_POST['check1'])){
  $checkerror ='<i class="fa-solid fa-check text-success"></i>';
  
}
else{
  $checkerror ='kindily accept the term and condition';
}
if(!empty($_POST['check_list'])){
  $checkarray = [];
  $length = 0;
  
  foreach($_POST['check_list'] as $x){
    array_push($checkarray,$x);
    $length = count($checkarray);



  }
  if($length >= 2){
    $skilldata = implode("-",$checkarray);
    
    // data($multiselectdata,'skill');
    $flag +=1;
    $multiselecterror ='<i class="fa-solid fa-check text-success"></i>';

  }else{
    echo $length;
    $multiselecterror ='select at least 2 option';
  }
}
else{
  $multiselecterror ='please select';
}
if(!empty($_POST['language'])){

  foreach($_POST['language'] as $x ){
    $new_languagedata .= "$x <br>";
  }
   
  // data($languagedata,'language');
  $flag +=1;
  $languageerror ='<i class="fa-solid fa-check text-success"></i>';
} 
else
{
  $languageerror ='please select';
}

if($flag === 8){
  // data($name,'name');
  // data($email,'email');
  // data($password,'password');
  // data($phonenumber,'phonenumber');
  // data($gender,'gender');
  // data($course,'course');
  // data($multiselectdata,'skill');
  // data($languagedata,'language');
  $namedata = $name;
  $emaildata = $email;
  $passworddata = $password;
  $phonenumberdata = $phonenumber;
  $genderdata = $gender;
  $coursedata = $course;
  $multiselectdata = $skilldata;
  $languagedata = $new_languagedata;



  $flag =0;
}
else {
  $mainerror = 'please fill all the feild';
}
// print_r($dataarry);


}
?>

<body>
  <div class="container">


    <di v class="row mt-5">
      <div class="col-12">


        <div class="card">
          <div class="card-header text-center fs-4 fw-bold ">
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

                  <div class="mt-2">
                    <label class="mb-3">Select a course!!</label>
                    <select class="form-select" aria-label="Default select example" name="course">
                      <option selected>select course</option>
                      <option value="Python">python</option>
                      <option value="Php">php</option>
                      <option value="Java">java</option>
                    </select>
                    <span class="error">
                      <?php echo $courseerror; ?>
                    </span>
                  </div>

                  <div class="mt-2">
                    <label class="mb-3">Select language !!</label>
                    <select class="form-select" name="language[]" multiple>
                      <option value="Malayalam">malayalam</option>
                      <option value="Hindi">Hindi</option>
                      <option value="English">English</option>
                      <option value="Arabic">Arabic</option>
                    </select>
                    <span class="error">
                      <?php echo $languageerror; ?>
                    </span>
                  </div>


                </div>
                <div>
                  <div>
                    <label class="mb-3">your skills are !!</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="HTML"
                      name="check_list[]">
                    <label class="form-check-label" for="inlineCheckbox1">HTML</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="CSS"
                      name="check_list[]">
                    <label class="form-check-label" for="inlineCheckbox2">CSS</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Java scripts"
                      name="check_list[]">
                    <label class="form-check-label" for="inlineCheckbox3">Java scripts</label>

                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Python" name="check_list[]">
                    <label class="form-check-label" for="inlineCheckbox3">Python</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="pSQL" name="check_list[]">
                    <label class="form-check-label" for="inlineCheckbox3">pSQL</label>
                  </div>
                  <div>
                    <span class="error">
                      <?php echo $multiselecterror; ?>
                    </span>
                  </div>
                  <div class="mt-3 form-check">
                    <input type="checkbox" class="form-check-input" id="Checkbox1" name="check1"
                      onclick="dissableButton()">
                    <label class="form-check-label" for="exampleCheck1">Terms and conditions</label>
                    <div>
                      <span class="error">
                        <?php echo $checkerror; ?>
                      </span>
                    </div>

                  </div>
                  <div class="mt-1">
                    <button type="submit" class="btn btn-primary mt-5" name="submit" id="btn" disabled>Submit</button>
                    
                  </div>
                  <span class="error mt-5">
                        <?php echo $mainerror; ?>
                      </span>
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
                    <tr>
                      <th scope="col">Course</th>
                      <td>
                        <?php echo $coursedata; ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">Skill</th>
                      <td>
                        <?php echo $multiselectdata; ?>
                      </td>
                    </tr>
                    <th scope="col">Lanaguage</th>
                    <td>
                      <?php echo $languagedata; ?>
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