<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>

<?php
$process_name=$_GET["process_name"];
// Create connection
$conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_machine_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT part_name FROM prn_table WHERE process_name="."'".$process_name."'";
$rows = array();
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["part_name"].",";
  }
} else {
  echo "0 results";
}
$conn->close();

?>