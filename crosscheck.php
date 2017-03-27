<?php
include ('script/database-connect.php');
session_start();

$userid = $_SESSION['userid'];

try{
  $sql = "SELECT sectionid FROM teachcourse WHERE teacherid='$userid'";
  $stmt = $conn->prepare($sql);
  $stmt.execute();
  foreach($stmtexec->fetchAll() as $k) {
    
  }

}
catch{

}
?>
