<?php
include ('script/database-connect.php');

$conn = connect();
$cid = $_POST['cid'];
$comment = $_POST['comment'];

$stmt = $conn->prepare("UPDATE takescourse SET comment='$comment' WHERE studentid=$cid");
$stmt->execute();

$conn = null;
echo "success";

 ?>
