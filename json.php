 
<?php
header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json; charset=UTF-8");
include "db.php";  
$data=array();
$q=mysqli_query($con,"select * from `contents`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data); 
?>