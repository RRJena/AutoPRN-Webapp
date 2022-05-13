
<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>
<?php
date_default_timezone_set('Asia/Kolkata');
//$ip=$_SERVER["SERVER_ADDR"];
$device_id=$_GET["did"];
$part_name=$_GET["model"];
$time=$_GET["time"];
$device_time_stamp=$_GET["time_stamp"];
$sync_time_stamp=date("Y-m-d H:i:s");
$production_date=$_GET["date"];
$alert_name=$_GET["alert"];
$description=$_GET["description"];
// Create connection
$conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_machine_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($device_id !='' || $device_id !=null)
{


$sql_insert="INSERT INTO prn_alert(device_id,model,date,time,time_stamp,alert_name,description) VALUES('".$device_id."','".$part_name."','".$production_date."','".$time."','".$sync_time_stamp."','".$alert_name."','".$description."')";
#echo $sql_insert;
if ($conn->query($sql_insert) === TRUE) {
  echo "0";
} else {
  echo  "1";
}
}
else{
  echo  "1";
}
$conn->close();


?>

