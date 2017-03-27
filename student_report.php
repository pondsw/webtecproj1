<?php
include ('database-connect.php');

$conn = connect();
$userid = $_GET['userid'];
$no = 1;

function showSubjectList($stmtexec){
     foreach($stmtexec->fetchAll() as $k) {
          echo '<tr>';
          echo '<td><div class="first" align="center">'.$no.'</div></td>';
		  $no++;
		  echo '<td><div align="center">'.$k['title'].'</div></td>';
		  echo '<td><div align="center">'.$k['courseid'].'</div></td>';
		  echo '<td><div align="center">'.$k['grade'].'</div></td>';
          echo '</tr>';
		  }
}

try{
$sql = "SELECT * FROM learningsystem.user,takescourse,section,course WHERE user.userid = ".$userid." AND takescourse.studentid = user.userid AND section.sectionid = takescourse.sectionid AND section.courseid = course.courseid";
$stmt = $conn->prepare($sql); 
$stmt->execute();

if ($stmt->rowCount()>0){
    showSubjectList($stmt);
	}
	else{
		echo "Course not found.";
		}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>