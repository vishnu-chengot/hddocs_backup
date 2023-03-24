<?php
if(isset($_POST['password']) && isset($_POST['password1'])){
  $password =$_POST['password'];
  $cpassword =$_POST['password1'];

  if($password == $cpassword){
    echo "<span style='color:green;'>password match</span>";
  }
  else{
echo "<span style='color:red;'>password  miss match</span>";
  }
    

}
?>

