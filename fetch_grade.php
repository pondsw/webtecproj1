<?php
include ('script/database-connect.php');
if(isset($_POST['get_option'])){
     $conn = connect();

     $cid = $_POST['get_option'];

     $ids=substr($cid, 0, 10);
     $grade=substr($cid, -1, 1);

     $stmt = $conn->prepare("UPDATE takescourse SET grade='$grade' WHERE studentid=$ids");
     $stmt->execute();

     $conn = null;
}
?>
