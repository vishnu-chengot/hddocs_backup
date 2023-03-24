<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <title>Document</title>
</head>
<?php
$languageerror ="";
$languagedata ="";
if(isset($_POST['submit'])){
  if(!empty($_POST['language'])){

  foreach($_POST['language'] as $x ){
    $languagedata .= "$x <br>";
  }
  $languageerror ='<i class="fa-solid fa-check text-success"></i>';
} 
else
{
  $languageerror ='please select';
}

}

?>

<body>
  <div class="container">
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <form  method="post">
        <div class="mt-2">
                    <label class="mb-3">Select language !!</label>
                    <select class="form-select" name="language[]" multiple>
                      <option value="Malayalam">malayalam</option>
                      <option value="Hindi">Hindi</option>
                      <option value="English">English</option>
                      <option value="Arabic">Arabic</option>
                    </select>
                    <span class="error" style="color:red;">
                      <?php echo $languageerror; ?>
                    </span>
                  </div>
                  <div class="mt-1">
                    <button type="submit" class="btn btn-primary mt-5" name="submit">Submit</button>
                  </div>
                  </form>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h1><?php echo $languagedata; ?></h1>
      </div>
    </div>
  </div>
  </div>
  </div>
  
</body>
</html>