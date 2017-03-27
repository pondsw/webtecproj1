<?php
include ('script/database-connect.php');
if(isset($_POST['get_option'])){
     $conn = connect();

     $cid = $_POST['get_option'];
     $tcid = $_GET['teacherid'];
     $stmt = $conn->prepare("SELECT s.sectionid FROM teachcourse AS tc INNER JOIN section AS s ON tc.sectionid=s.sectionid WHERE tc.teacherid=$tcid and s.courseid=$cid");
     $stmt->execute();

     foreach($stmt->fetchAll() as $k) {
          echo "<option value='" . $k['sectionid'] ."'>" . $k['sectionid'] ."</option>";
     }
}
?>
