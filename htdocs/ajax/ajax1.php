<?php
include('dbconnection.php');
if(isset($_POST['state'])){
$data =$_POST['state'];
echo $data;
$arr =array();
$i=0;
 $id_arry = explode('-',$data);
 print_r($id_arry);
$sql ="SELECT id,name FROM tbl_cities WHERE state_id =$id_arry[0] ORDER BY  ASC";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){?>
 <option value="<?php  echo $row['id']."-".$row['name'] ;?>"><?php  echo $row['name'] ;?></option>
<?php
} ?>

//  while ($row = $result->fetch_assoc()) {
//         $arr[$i] = $row;
//         $i++;
//       }

// echo json_encode($arr);

<?php 
}
?>