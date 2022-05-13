<?php include_once("../cred.php");?>
<?php include_once("../time.php");?>
<?php
$cycle_time=$_GET["cycle_time"];
$idle_time=$_GET["idle_time"];
$mac_id=$_GET["mac_id"];
if($mac_id=="" || $idle_time=="" || $cycle_time=="")
{
echo "0";
}
else{


//$cur_date='2022-02-07';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO production_data (cycle_time, idle_time, machine_id)
VALUES ('$cycle_time', '$idle_time', '$mac_id')" ;

if ($conn->query($sql) === TRUE) {
  echo "1";
} else {
  echo "0".$sql.$conn->error;
}
$conn->close();
}

?>