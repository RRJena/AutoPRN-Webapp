
<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>
<?php
date_default_timezone_set('Asia/Kolkata');
$serial=$_POST["id"];
$ip=$_SERVER["SERVER_ADDR"];
$order_no=$_POST["order_no"];
$part_name=$_POST["part"];
$target=$_POST["target"];
$completed=$_POST["completed"];
$production_date=$_POST["production_date"];
$priority=$_POST["priority"];
$status=$_POST["status"];
$remark=$_POST["remark"];
$machine_name=$_POST["machine_name"];
$add_stamp=date("Y-m-d H:i:s");
// Create connection
$conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_machine_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO prn_target(order_no,part_name,machine_name,target,completed,production_date,priority,status,remark) VALUES('".$order_no."','".$part_name."','".$machine_name."','".$target."','".$completed."','".$production_date."','".$priority."','".$status."','".$remark."')";

#echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "PRN DATA Updated successfully. Please Wait...";
  header('Location: index.php');
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header('Location: index.php');
}

$conn->close();


?>

