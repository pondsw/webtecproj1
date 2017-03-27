<?php
include ('script/database-connect.php');
session_start();
$conn = connect();
$userid = $_SESSION['userid'];

function showSubjectList($stmtexec){
  $no = "1";
     foreach($stmtexec->fetchAll() as $k) {
       echo '<tr>';
       echo '<td><div class="first" align="center">'.$no.'</div></td>';
       $no++;
       ;echo '<td><div align="center">'.$k['title'].'</div></td>';
       echo '<td><div align="center">'.$k['courseid'].'</div></td>';
       echo '<td><div align="center">'.$k['grade'].'</div></td>';
       echo '</tr>';
		  }
}

try{
$sql = "SELECT * FROM learningsystem.user,learningsystem.takescourse,learningsystem.section,learningsystem.course where user.userid = '$userid' and takescourse.studentid = user.userid and section.sectionid = takescourse.sectionid and section.courseid = course.courseid";
$stmt = $conn->prepare($sql);
$stmt->execute();

if ($stmt->rowCount()>0){
    showSubjectList($stmt);
	}
	else{
		echo "Course not found.";
}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
