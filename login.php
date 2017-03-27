<?php

if(isset($_POST['user']))
{

  $u = $_POST['user'];
  $p = $_POST['pwd'];

  echo fetch_data($u,$p);

}

function fetch_data($user,$pwd){
  $username = "webtech";
  $password = "P@ssw0rd";
  $dbname = "learningsystem";
  $servername = "188.166.223.106";


  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select COUNT(*) as total ,userid,fname, lname,type FROM learningsystem.user where userid = '$user' and pwd = '$pwd';";
  // use exec() because no results are returned
  // $conn->exec($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $output  = "test";
    foreach ($stmt->fetchAll() as $key => $value){
      // echo $value["propertyno"];
      $output = $value;
    }
    if($output["total"] == 1){
      // session_start();
      // $_SESSION["userid"] = $output["userid"];
      // $_SESSION["type"] = $output["type"];
      // session_unset();
    }
    // $output = $stmt->fetchAll();

  }
  catch(PDOException $e)
  {
    // echo $sql . " " . $e->getMessage();
    $output["err"] = $e->getMessage();
  }

  $conn = null;
  return json_encode($output);
}



 ?>
