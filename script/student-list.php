<?php
include ('database-connect.php');

$conn = connect();
$section = $_GET['section'];

function showStudentList($stmtexec){
     echo "<table style='border: solid 1px black;'>";
     echo "<tr><th>Student ID</th><th>Student Name</th><th>Grade</th><th>Comments</th></th></tr>";

     foreach($stmtexec->fetchAll() as $k) {
          echo "<tr>";
          echo "<td style='width: 150px; border: 1px solid black;'>".$k['studentid']."</td>";
          echo "<td style='width: 150px; border: 1px solid black;'><a href=\"student-info.php?studentid=".$k['studentid']."\">".$k['fname']." ".$k['lname']."</a></td>";
          echo "<td style='width: 150px; border: 1px solid black;'>".$k['grade']."</td>";
          echo "<td style='width: 150px; border: 1px solid black;'>".$k['comment']."</td>";
          echo "</tr>";
     }

     echo "</table>";
}

echo "<h3>Student List</h3>";

try {
     $stmt = $conn->prepare("SELECT studentid, fname, lname, grade, comment FROM takescourse As tc INNER JOIN user As u ON tc.studentid = u.userid where sectionid='$section'");
     $stmt->execute();

     if ($stmt->rowCount()>0){
          showStudentList($stmt);
     }
     else{
          echo "<h3>Student Not Found !</h3>";
     }
}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
?>
