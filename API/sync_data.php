
<?php include $_SERVER['DOCUMENT_ROOT']."/eol/controller/database-config.php"?>
<?php
date_default_timezone_set('Asia/Kolkata');
//$ip=$_SERVER["SERVER_ADDR"];
$device_id=$_GET["did"];
$part_name=$_GET["model"];
$machine_name=$_GET["machine"];
$process_name=$_GET["process"];
$ip=$_SERVER["REMOTE_ADDR"];
$toc=$_GET["toc"];
$tok=$_GET["tok"];
$tng=$_GET["tng"];
$time=$_GET["time"];
$remark=$_GET["remark"];
$sync_time_stamp=date("Y-m-d H:i:s");
$production_date=$_GET["date"];
$status="IN PROGRESS";
// Create connection
$conn = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_machine_dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (($device_id !='' || $device_id !=null) && ($part_name!='' || $part_name!=null) && ($process_name!='' || $process_name!=null))
{

$sql_check="SELECT device_id from prn_data WHERE date='".$production_date."' AND model='".$part_name."' AND device_id='".$device_id."'";
$res=mysqli_query($conn,$sql_check);
    if (mysqli_num_rows($res) > 0) {
          $sql_update = "UPDATE prn_data SET CYCLE=".$toc.",OK= ".$tok.",NG=".$tng.",IP='".$ip."',remark='".$remark."',time='".$time."' WHERE date='".$production_date."' AND model='".$part_name."' AND device_id='".$device_id."'";
          if ($conn->query($sql_update) === TRUE) {
            echo "0";
            exit;
          } else {
            echo "1";
            echo("Error description: " . $conn -> error);
          }
        }
else{
$sql_insert="INSERT INTO prn_data(device_id,machine_name,process_name,model,IP,date,time,CYCLE,OK,NG,time_stamp,remark) VALUES('".$device_id."','".$machine_name."','".$process_name."','".$part_name."','".$ip."','".$production_date."','".$time."',".$toc.",".$tok.",".$tng.",'".$sync_time_stamp."','".$remark."')";
if ($conn->query($sql_insert) === TRUE) {
  echo "0";
} else {
  echo "1";
}
}
}
else{

  echo "1";
}
$conn->close();


?>

