<DOCTYPE! html>
<html>
     <head>
          <title>Show Course List</title>
     </head>

     <body>
          <?php
          include ('database-connect.php');

          $conn = connect();
          $user = $_GET['user'];

          function showCourseList($stmtexec){
               echo "<table style='border: solid 1px black;'>";
               echo "<tr><th>Course ID</th><th>Title</th><th>Section</th></tr>";

               foreach($stmtexec->fetchAll() as $k) {
                    echo "<tr>";
                    echo "<td style='width: 150px; border: 1px solid black;'>".$k['courseid']."</td>";
                    echo "<td style='width: 150px; border: 1px solid black;'>".$k['title']."</td>";
                    echo "<td style='width: 150px; border: 1px solid black;'><a href=\"student-list.php?section=".$k['sectionid']."\">".$k['sectionid']."</a></td>";
                    echo "</tr>";
               }

               echo "</table>";
          }

          echo "<h2>Welcome, $user</h2>";
          echo "<h3>Course List</h3>";

          try {
               $stmt = $conn->prepare("SELECT c.courseid, c.title, s.sectionid FROM (course As c INNER JOIN section As s ON c.courseid = s.courseid) INNER JOIN teachcourse AS t ON s.sectionid = t.sectionid WHERE t.teacherid = $user");
               $stmt->execute();

               if ($stmt->rowCount()>0){
                    showCourseList($stmt);
               }
               else{
                    echo "<h3>Course Not Found !</h3>";
               }
          }
          catch(PDOException $e) {
               echo "Error: " . $e->getMessage();
          }
          $conn = null;
          ?>

     </body>
</html>
