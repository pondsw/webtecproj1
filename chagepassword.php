<?php
include ('script/database-connect.php');
session_start();

$conn = connect();
$oldpass = $_GET['oldpass'];
$newpass = $_GET['newpass'];
$userid =  $_SESSION["userid"];

try{
	$sql = "SELECT pwd FROM user WHERE userid='$userid'";
	$stmt = $conn->query($sql);

	if ($stmt->rowCount()>0){
		foreach ($stmt->fetchAll() as $key => $value){
			$output = $value;
		}
	}
	else{
		echo 'User not found.';
		exit;
	}

	if ($oldpass == $output['pwd']){
		$sql = "UPDATE user SET pwd='$newpass' WHERE userid='$userid'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		if ($stmt->rowCount()>0){
			echo "Changed password.";
			}
		else{
			echo "User not found.";
			}
		}
	else{
		echo "Wrong password.";
	}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>
