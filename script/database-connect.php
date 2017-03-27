<?php
function connect(){
     $servername = "188.166.223.106";
     $username = "webtech";
     $password = "P@ssw0rd";
     $dbname = "learningsystem";

     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     return $conn;
}
 ?>
