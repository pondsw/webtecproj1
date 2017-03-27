<?php
include ('script/database-connect.php');
session_start();

$conn = connect();
$qrcode = $_GET['code'];
$status = true;

if(isset($_SESSION['userid'])){
	$studentid = $_SESSION['userid'];
}

try{
	$sql = "SELECT secdetailid FROM sectiondetail WHERE qrcode='$qrcode'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

	if ($stmt->rowCount()>0){
		foreach ($stmt->fetchAll() as $key => $value){
			$output = $value;
		}
	}
	else{
		echo "QRcode not found.";
		exit;
		}
	$qid = $output["secdetailid"];
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
	}

//check duplicate
try{
	$sql = "SELECT studentid FROM sectioncheck WHERE studentid='$studentid'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	if ($stmt->rowCount()>0){
		$status = false;
		echo "Already checked in.";
	}
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
	}
if($status == true){
	try {
		$sql = "INSERT INTO sectioncheck (secdetailid, studentid, datetime, status) VALUES ('$qid', '$studentid',CURRENT_TIMESTAMP, 'checked')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}

	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
		}
$conn = null;
}
?>
