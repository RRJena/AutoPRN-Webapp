
<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>
<?php
date_default_timezone_set('Asia/Kolkata');
//$ip=$_SERVER["SERVER_ADDR"];
$device_id=$_GET["did"];
//echo $device_id;
//echo $device_id;
// Create connection
$conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_machine_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($device_id !='' || $device_id !=null)
{


$sql="SELECT * from prn_device_details WHERE device_id='".$device_id."'";
//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  $device = array();
  while($row = $result->fetch_assoc()) {
    $device[] = $row;
}
}
}
else{
  echo  "1";
}
$conn->close();
echo json_encode($device);

?>