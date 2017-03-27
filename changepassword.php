<?php
if(isset($_POST['pwd']))
{
  $p = $_POST['pwd'];
  echo fetch_data($p);
}


function fetch_data($pwd){
  $username = "webtech";
  $password = "P@ssw0rd";
  $dbname = "learningsystem";
  $servername = "188.166.223.106";
  session_start();
  $output = array("userid"=>$_SESSION["userid"]);
  $output["userid"] = $_SESSION["userid"] ;
  $output["type"] = $_SESSION["type"];
  $output["fname"] = $_SESSION["fname"];
  $output["lname"] = $_SESSION["lname"];
  // session_unset();
  $uid = $output["userid"];
  $output["id"] = session_id();

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE learningsystem.user SET `pwd`='$pwd', `isnewpwd`='1' WHERE `userid`='$uid';";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    // echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


  return json_encode($output);
}
 ?>
