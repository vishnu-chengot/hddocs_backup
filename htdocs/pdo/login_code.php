
<?php
session_start();
require_once realpath(__DIR__ . "/vendor/autoload.php");
// use Dotenv\Dotenv;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$username = $_ENV['ADMIN_USER_NAME'];
$password = $_ENV['ADMIN_PASSWORD'];
echo($password);
echo($username);


  $user =$_POST['cname'];
  $u_password =$_POST['cpassword'];
  echo($user);
    echo($u_password);
  if($user == $username && $u_password == $password){
   $_SESSION['admin'] = $username;
    header("Location:create_html.php");
  }
  else{
     header("Location:login.php");
  }

?>