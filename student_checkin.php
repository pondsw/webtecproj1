<?php
include ('database-connect.php');
session_start();

$con = connect();
$date = date("Y.m.d");

//first student
$_SESSION['$qid']['number'] = 1;

//if checked in?
$status = true;

$qid = $_GET['qid'];
$studentid = $_GET['studentid'];

checkin()

function checkin(){
foreach ($_SESSION['$qid'] as $id){
	if ($studentid == $id){
		echo 'Already checked in.';
		$status = false;
	}
}

if($status == true){
	$_SESSION['$qid'][$_SESSION['$qid']['number']] = $studentid;
	$_SESSION['$qid']['number']++;
	try {
		$sql = "INSERT INTO sectioncheck (secdetailid, studentid, datetime, status)
		VALUES ('".$qid."', '".$studentid."', 'CURRENT_TIMESTAMP', 'true')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
		}
$conn = null;
}
?>