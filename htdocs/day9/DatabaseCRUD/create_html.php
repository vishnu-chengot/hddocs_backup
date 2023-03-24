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
include('create.php');

?>

<body>
  <div class="container">


    <di v class="row mt-5">
      <div class="col-12">


        <div class="card">
          <div class="card-header text-center fs-4 fw-bold ">
            Add new seller
          </div>
          <div class="card-body">
           
<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <?php echo $mainmsg;?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> -->
<div class="alert   alert-dismissible fade show" role="alert" id="alert">
             <?php echo $mainmsg;?> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
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
                  <div >
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
                    <a href="read_html.php" class="btn btn-primary mt-5">view seller list</a>

                  </div>
                  <span class="error mt-5">
                    <?php echo $mainerror; ?>
                  </span>
                </div>
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
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
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

</body>

</html>