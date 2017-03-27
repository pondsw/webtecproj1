<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$pwd = $_POST["pwd"];
$isnewpwd = $_POST["isnewpwd"];
$userid = $_POST["userid"];
$type = $_POST["type"];

echo createUser($userid, $fname, $lname, $pwd, $isnewpwd, $type);

function createUser($userid, $fname, $lname, $pwd, $isnewpwd, $type){
  $username = "webtech";
  $password = "P@ssw0rd";
  $dbname = "learningsystem";
  $servername = "188.166.223.106";


  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO user (userid, fname, lname, pwd, type, isnewpwd)
  VALUES ('$userid', '$fname', '$lname', '$pwd', '$type', '$isnewpwd')";
  // use exec() because no results are returned
  $conn->exec($sql);

  // if ($conn->query($sql) === TRUE) {
  //   echo '<script language="javascript">';
  //   echo 'alert("User was create successfully")';
  //   echo '</script>';
  // }
  // else {
  // echo '<script language="javascript">';
  // echo 'alert("Error".<br>.$conn->error)';
  // echo '</script>';
  // }

}

catch(PDOException $e)
{
}

$conn=null;
}


 ?>
