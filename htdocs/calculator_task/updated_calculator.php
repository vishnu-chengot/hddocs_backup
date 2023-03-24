<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<style>
  #display{
    position: relative;
    
  }
  #result{
    font-size:25px;
    font-weight:bold;
    
    position:absolute;
    top: 148px;
    left: 149px;
  }
</style>

 
<body>


<div class="container">
  
<div class="card mt-5 border-3 border-danger" style="width: 18rem;">
<div class="card-header text-center bg-danger text-light fw-bold fs-5">
    Calculator
  </div>
  <div class="card-body">
    <form  method="post">
    <textarea class="form-control fs-4"  id="display" rows="3" readonly placeholder="result" ></textarea> <br>
  <select class="form-select" aria-label="Default select example" name="calc">
  <option selected>choose one</option>
  <option value="add">Addition</option>
  <option value="sub">Substraction</option>
  <option value="mul">Multiplication</option>
  <option value="div">Division</option>
</select> <br>
<input type="text" class="form-control"  placeholder="First value" name="num1"> <br>
<input type="text" class="form-control"  placeholder="Second value" name="num2"> <br>
<button type="submit" class="btn btn-outline-danger btn-lg px-5 fw-bold" name="submit">=</button>
</form>
  </div>
  
 
</div>
</div>
<?php
  
  if(isset($_POST['submit']))
  {
   
   $num1 =$_POST['num1'];
   $num2 =$_POST['num2'];
   $calc =$_POST['calc'];
   
 
   function calculator(float $num1,float $num2,string $calc){
 
     switch($calc){
       case "add":
         return $num1+$num2;
       break;
 
       case "sub":
         return $num1-$num2;
       break;
 
       case "mul":
         return $num1*$num2;
       break;
 
       case "div":       
         if($num2 == 0){  # to ignore zero division erorr
         return "Zero division error";  
         }
         else {
           return $num1/$num2;
         }
         
       break;
       default:
       return "please choose option";
 
     }
   }

   
 
   $output =calculator($num1,$num2,$calc);
  

   echo"<script>document.getElementById('display').value = '$output';</script>";
   echo("<meta http-equiv='refresh' content='1'>");

  

  
   
  }
 
   ?>
 
 
</body>
</html>