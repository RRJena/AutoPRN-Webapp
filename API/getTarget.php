<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>

<?php
$part_name=$_GET["part"];
$machine_name=$_GET["machine"];
$date=$_GET["date"];
// Create connection
$conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_machine_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM prn_target WHERE part_name="."'".$part_name."' AND production_date='".$date."' AND machine_name='".$machine_name."'";
$target_details = array();
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $target_details[] = $row;
  }
} else {
  #echo "0";
}
$conn->close();
echo json_encode($target_details);
?>