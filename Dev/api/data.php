<?php include_once("cred.php");?>
<?php include_once("time.php");?>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$ok=$_GET["ok"];
$ng=$_GET["ng"];
$by_pass=$_GET["by_pass"];
$mac_id=$_GET["mac_id"];
if($mac_id=="" || $ok=="" || $ng=="")
{
echo "0";
}
else{

echo $ok."  ".$ng." ".$mac_id." ".$cur_date;
//$cur_date='2022-02-07';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO production_data (ok, ng,by_pass, machine_id, p_date)
VALUES ('$ok', '$ng','$by_pass', '$mac_id','$cur_date') ON DUPLICATE KEY UPDATE ok='$ok',ng='$ng',by_pass='$by_pass';" ;

$sql .= "INSERT INTO historian_data (ok, ng,by_pass, machine_id, p_date) VALUES ('$ok', '$ng','$by_pass', '$mac_id','$cur_date')";

if ($conn->multi_query($sql) === TRUE) {
  echo "1";
} else {
  echo "0".$sql.$conn->error;
}
$conn->close();
}

?>