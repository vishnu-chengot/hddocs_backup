<?php
require('databaseconnection.php');
  
  
//  $deletemsg ="";
  if(isset($_POST['delete'])){
  
    $seller_id =$_POST['hidden'];
    // $seller_id = $_GET['seller'];
  echo $seller_id;
  // exit();
  $sql = "DELETE FROM seller_tb WHERE id=$seller_id";
  
  if($conn->query($sql) === TRUE){
    $GLOBALS['deletemsg']  ='deleted succesfully';
    header('location:read_html.php');
    
  }
  }
  else{
    echo "error";

  }





//   if(isset($_GET['delete']) != "")
// 	{
// 	    $id = $_GET['delete']; 
      

     
       
// $sql = "DELETE FROM seller_tb WHERE id = '$id'";
// 	    $result=mysqli_query($conn,$sql);
	    
// 	    header('Location:read_html.php');
     
	    
// 	}

  


?>
