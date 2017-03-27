<?php
include ('script/database-connect.php');
session_start();

$conn = connect();
$qrcode = $_GET['code'];
$studentid = 0;
$_SESSION['$qid']['number'];
$status = true;

try{
	$sql = "SELECT secdetailid FROM sectiondetail WHERE qrcode='$qrcode'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	if ($stmt->rowCount()>0){
    $qid = $stmt;
	}
	else{
		echo "QRcode not found.";
		exit;
		}
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
	}

//check duplicate
foreach ($_SESSION['$qid'] as $id){
	if($studentid == $id){
		$status = false;
	}
	else{
		echo 'Already checked in.';
	}
}

if($status == true){
	$_SESSION['$qid'][$_SESSION['$qid']['number']] = $studentid;
	$_SESSION['$qid']['number']++;
	try {
		$sql = "INSERT INTO sectioncheck (secdetailid, studentid, datetiming, status)
		VALUES ('$qid', '$studentid','".date("Y-m-d H:i:s", time())."', 'checked')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}

	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
		}
$conn = null;
}
?>
