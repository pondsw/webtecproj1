<?php
include ('database-connect.php');

$conn = connect();
$oldpass = $_GET['oldpass'];
$newpass = $_GET['newpass'];
$userid = $_GET['userid'];

try{
	$sql = "SELECT pwd FROM user WHERE userid='$userid'";
	$stmt = $conn->query($sql);

	if ($oldpass == $stmt){
		$sql = "UPDATE user SET pwd='".$pass."' WHERE id=".$userid."";
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
$conn->close();
?>
