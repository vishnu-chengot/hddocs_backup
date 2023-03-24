<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<?php
include('registeration.php');
?>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 mt-4">
        <div class="card">
          <div class="card-body">
            <div class="row g-0">
              <div class="col-sm-3">
                <div class="card ">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
                </div>
              </div>
              <div class="col-sm-9">
                <div class="card">
                  <div class="card-body">
                     <span class="error" id="mainmsg">
                       
                      </span>
                    <div class="mb-3">
                      <label for="fnmae" class="form-label">Name: <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="name">
                      <span class="error">
                        <!-- <?php echo "$nameerror"; ?> -->
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="fnmae" class="form-label">Email: <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="email">
                      <span class="error">
                        <!-- <?php echo "$nameerror"; ?> -->
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="fnmae" class="form-label">Phone: <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="phone">
                      <span class="error">
                        <!-- <?php echo "$nameerror"; ?> -->
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="fnmae" class="form-label">DOB: <span class="text-danger">*</span></label>
                      <input type="date" class="form-control" id="dob">
                      <span class="error">
                        <!-- <?php echo "$nameerror"; ?> -->
                      </span>
                    </div>

                    <div class="row g-3">
                      <div class="col">
                        
                        <select class="form-select" aria-label="Default select example" id="country">
                          <option selected>Country</option>
                          <?php 
                          while($row =$result->fetch_assoc()){
                          ?>
                          <option value="<?php echo $row['id']."-".$row['name'];?>"><?php echo $row['name']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                      <div class="col">
                        <select class="form-select" aria-label="Default select example" id="state">
                        
                        </select>
                      </div>
                      <div class="col">
                        <select class="form-select" aria-label="Default select example" id="city">
                          
                        </select>
                      </div>
                      <div class="mb-3">
                      <label for="fnmae" class="form-label">Pincode: <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="pincod">
                      <span class="error">
                        <!-- <?php echo "$nameerror"; ?> -->
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="fnmae" class="form-label">Position:<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="position">
                      <span class="error">
                        <!-- <?php echo "$nameerror"; ?> -->
                      </span>
                    </div>
                    <div class="mt-1">
                            <button type="submit" class="btn btn-primary "  id="btn">Submit</button>
                            <!-- <a href="read_html.php" class="btn btn-primary mt-5">view seller list</a> -->
                        
                          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>
    $(document).ready(function () {
      $('#country').click(function () {
        data = $('#country').val()
        console.log(data)
        $.ajax({
          type: "POST",
          url: "ajax.php",
          // dataType:'json',
          data: {
            'country': data
          },
          success: function (data) {
            //  console.log(data)
            // response =html.date
            // console.log(response)
            $('#state').html(data)
          }

        })

      }),
      $('#state').click(function () {
        data = $('#state').val()
        console.log(data)
        $.ajax({
          type: "POST",
          url: "ajax1.php",
          // dataType:'json',
          data: {
            'state': data
          },
          success: function (data) {
            //  console.log(data)
            // response =html.date
            // console.log(response)
            $('#city').html(data)
          }

        })

      }),
      $('#btn').click(function () {
        name =$('#name').val()
        email =$('#email').val()
        phone =$('#phone').val()
        dob =$('#dob').val()
        // console.log(dob)
        country =$('#country').val()
        state =$('#state').val()
        city =$('#city').val()
        pincode =$('#pincod').val()
        position =$('#position').val()
        $.ajax({
          type: "POST",
          url: "registeration.php",
          data: {
            'name': name,
            'email': email,
            'phone':phone,
            'dob': dob,
            'country':country,
            'state':state,
            'city':city,
            'pincode':pincode,
            'position':position,
          },
          success: function (data) {
           $('#mainmsg').html(data)
          }
        })

      
      })
    })

  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
  integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>