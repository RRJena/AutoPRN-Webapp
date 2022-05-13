<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>

<?php
date_default_timezone_set('Asia/Kolkata');
$device_id=$_GET["did"];
$temp=$_GET["temp"];
$memory=$_GET["memory"];
$ip=$_SERVER["REMOTE_ADDR"];
$disk=$_GET["disk"];
$cpu=$_GET["cpu"];
$device_time_stamp=$_GET["time"];
$update_time_stamp=date("Y-m-d H:i:s");
$created_time_stamp=date("Y-m-d H:i:s");
// Create connection
$conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_machine_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($device_id !='' || $device_id !=null)
{
$sql = "SELECT device_id FROM prn_device WHERE device_id="."'".$device_id."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "UPDATING EXISTING DEVICE";
  $sql="UPDATE prn_device SET ip='".$ip."',temp='".$temp."',disk='".$disk ."',memory='".$memory."',cpu='".$cpu."',update_time_stamp='".$update_time_stamp."' WHERE device_id='".$device_id."'";
  if ($conn->query($sql) === TRUE) {
    echo "Device updated successfully!";
  } else {
    echo "Error updating record: " . $conn->error;
  }
} else {
  echo "ADDING NEW DEVICE";
  $sql="INSERT INTO prn_device(device_id,ip,cpu, memory,disk,temp,device_time_stamp,created_time_stamp,update_time_stamp) VALUES('".$device_id."','".$ip."','".$cpu."','".$memory."','".$disk."','".$temp."','".$device_time_stamp."','".$created_time_stamp."','".$update_time_stamp."')";
  if ($conn->query($sql) === TRUE) {
    echo "New Device created successfully!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}

$conn->close();

?>