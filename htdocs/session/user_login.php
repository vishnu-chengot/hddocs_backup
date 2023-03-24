<?php

session_start();
if (isset($_POST['submit'])) {
      $cname = $_POST['cname'];
      $password = $_POST['cpassword'];
      $existingData = file_get_contents('data.json');
      $existingArray = json_decode($existingData, true);
    foreach ($existingArray as $userDetails) {
        if ($userDetails['user_name'] == $cname && $userDetails['password'] == $password) {
            $_SESSION["user"] = $userDetails['user_name'];
            header("Location:home.php");
        } else {
            echo"failed";
            header("Location:login.php");
        }
    }
}
