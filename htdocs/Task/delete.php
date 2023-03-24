<?php
include('databaseconn.php');
if(isset($_GET['student_id'])){
  $student_id =$_GET['student_id'];
  echo "$student_id";
  $sql = "SELECT image  FROM student_tb WHERE id =$student_id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $img =$row['image'];
  $sql = "DELETE FROM student_tb WHERE id=$student_id";
  
  if($conn->query($sql) === TRUE){
  
  echo $img;
  unlink("uploads/".$img);
    
    $GLOBALS['deletemsg']  ='deleted succesfully';
    header('location:old_dashboard.php');
  }
  else{
    echo "error";
  }
  
}

  // if(isset($_POST['delete'])){
  
  //   $student_id =$_POST['hidden'];
   
  // $sql = "DELETE FROM student_tb WHERE id=$student_id";
  
  // if($conn->query($sql) === TRUE){
  //   $GLOBALS['deletemsg']  ='deleted succesfully';
  //   header('location:dashboard_html.php');
    
  // }
  // }
  // else{
  //   echo "error";

  // }
?>