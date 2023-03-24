<?php
include('dbconnection.php');
if(isset($_POST['country'])){
$data =$_POST['country'];
// echo $data;
$arr =array();
$i=0;
$id_arry = explode('-',$data);
$sql ="SELECT id,name FROM tbl_states WHERE country_id = $id_arry[0]";
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

<?php }
?>