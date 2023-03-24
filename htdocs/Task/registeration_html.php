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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
include('registeration.php');
?>

</head>

<body>
  <nav class="navbar navbar-expand-lg  bg-light  fixed-top">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
        aria-controls="#offcanvasScrolling" aria-expanded="false" aria-label="Toggle navigation">
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

  <div class="offcanvas offcanvas-start sidebar-nav rounded-4 border-0 " data-bs-scroll="true" data-bs-backdrop="false"
    tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header text-dark">
      <h5 class="offcanvas-title" id="offcanvasScrollingLabel"></h5>
      <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
    </div>
    <div class="offcanvas-body text-secondary">
      <ul class="navbar-nav" id="nav-bar-item">
        <li class="nav-item">
          <a class="nav-link d-flex " aria-current="page" href="old_dashboard.php"><i
              class="fa-solid fa-house me-3 fs-4"></i>
            <p class="fs-5">Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
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

    <div class="container">


      <div class="row mt-5">
        <div class="col-12">


          <div class="card mt-5">
            <div class="card-header text-center fs-4 fw-bold ">
              Add student
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
              <form method="post" enctype="multipart/form-data">
                <div class="row mt-5">

                  <div class="col-6">

                    <div class="mb-3">
                      <label for="fnmae" class="form-label">Name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="nmae" name="name">
                      <span class="error">
                        <?php echo "$nameerror"; ?>
                      </span>
                    </div>

                    <div class="mb-3">
                      <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="emaildata" name="email">
                      <span class="error" id="error">
                        <?php echo $emailerror; ?>
                      </span>

                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                      <input type="password" class="form-control" id="password" name="password"><span class="float-end"><i class="fa-regular fa-eye" onclick="show()" id="icon"></i></span>
                      <span class="error">
                        <?php echo $passworderror; ?>
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="phonenumber" class="form-label">Phone Number<span class="text-danger">*</span></label>
                      <input type="number" class="form-control" id="phonenumber" name="phonenumber">
                      <span class="error">
                        <?php echo $phoneerror; ?>
                      </span>
                    </div>

                        <!-- paste here -->
                        <div>
                          <div>
                            <label class="mb-3">your skills are !! <span class="text-danger">*</span></label>
                          </div>
                        
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="HTML" name="check_list[]">
                            <label class="form-check-label" for="inlineCheckbox1">HTML</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="CSS" name="check_list[]">
                            <label class="form-check-label" for="inlineCheckbox2">CSS</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Java scripts" name="check_list[]">
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
                            <input type="checkbox" class="form-check-input" id="Checkbox1" name="check1" onclick="dissableButton()">
                            <label class="form-check-label" for="exampleCheck1">Terms and conditions</label>
                            <div>
                              <span class="error">
                                <?php echo $checkerror; ?>
                              </span>
                            </div>
                        
                          </div>
                          <div class="mt-1">
                            <button type="submit" class="btn btn-primary mt-5" name="submit" id="btn" disabled>Submit</button>
                            <!-- <a href="read_html.php" class="btn btn-primary mt-5">view seller list</a> -->
                        
                          </div>
                          <span class="error mt-5">
                            <?php echo $mainerror; ?>
                          </span>
                        </div>

                  </div>


                  <!-- second part  -->

                  <div class="col-6">


                    <div>
                      <label class="form-check-label" for="flexRadioDefault1">
                        Gender<span class="text-danger">*</span>

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
                      <label class="mb-3">Select a course!!<span class="text-danger">*</span></label>
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
                      <label class="mb-3">Select language !! <span class="text-danger">*</span></label>
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
                    <div>
                      <label class="mt-3">Profile pic <span class="text-danger">*</span></label>

                      <div class="input-group mt-2">
                        <!-- <label class="input-group-text" for="inputGroupFile01">Profile</label> -->
                        <input type="file" class="form-control" id="inputGroupFile01" name="img">


                      </div>
                      <span class="error">
                        <?php echo $imgerror; ?>
                      </span>
                    </div>


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
  </main>
  <script src="hover.js"></script>
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
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> -->
  <script>
    $(document).ready(function () {

      str = $('div.alert').text();
      if ($.trim(str) === "") {
        $('div.alert').hide();
      }
      else {
        if ($.trim(str) === "please fill all the feild" || $.trim(str) === 'email is already exisit') {
          $('div.alert').addClass("alert-danger");
        }
        else {
          $('div.alert').addClass("alert-success");
        }

      }
    })
  </script>
  <script>
    $(document).ready(function () {
      $('#emaildata').change(function () {
        data = $('#emaildata').val()
        // console.log(data)
        $.ajax({
          type: "POST",
          url: "ajax.php",
          // dataType:'json',
          data: {
            'emaildata': data
          },
          success: function (data) {
            //  console.log(html(response))
            $('#error').html(data)
          }

        })

      })
    })

  </script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
    integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>


<script>
  value =document.getElementById('password')

  function show() {
    if(value.type ==='password'){
      value.type ="text"
      // <i class="fa-regular fa-eye-slash"></i>
    }
    else{
      value.type ="password"
    }
    
  }

</script>



</body>

</html>