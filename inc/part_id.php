<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>
<?php
// Create connection
$conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_machine_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT part_id FROM prn_table";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo"<script>var id=[";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '"'.$row["part_id"].'",';
  }
  echo '".."';
  echo"];</script>";
} else {
  echo "'ERROR'";
}
$conn->close();


?>

