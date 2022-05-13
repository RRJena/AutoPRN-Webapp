<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>
<?php
$ip=$_SERVER["SERVER_ADDR"];
$part_id=$_POST["part_id"];
$part_name=$_POST["part"];
$model=$_POST["model"];
$product_type=$_POST["product_type"];
$process_name=$_POST["process"];
$machine_name=$_POST["machine"];
$process_cost=$_POST["pcost"];
$part_cost=$_POST["part_cost"];
$customer=$_POST["customer"];
$cycle_time=$_POST["cycle_time"];
// Create connection
$conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_machine_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO prn_table(part_id,part_name,product_model,product_type,process_name,machine_name,process_cost,part_cost,customer,ideal_Cycle_time) VALUES('".$part_id."','".$part_name."','".$model."','".$product_type."','".$process_name."','".$machine_name."','".$process_cost."','".$part_cost."','".$customer."','".$cycle_time."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully. Please Wait...";
  header('Location: index.php');
  exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

