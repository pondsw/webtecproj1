<?php

$type = $_POST["type"];
$fname = $_POST["fname"];
echo fetchData($type,$fname);

function fetchData($type,$fname){
  $username = "webtech";
  $password = "P@ssw0rd";
  $dbname = "learningsystem";
  $servername = "188.166.223.106";


  $num = 1;
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "Select userid,fname,lname,pwd from user where type='$type' and fname like '$fname%'";
    $stmt = $conn->prepare("$sql");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $output = '';
    foreach ($stmt->fetchAll() as $key => $value){
      $output .= '<tr>   <td>'.$num.'</td>
                         <td>'.$value["fname"].'</td>
                         <td>'.$value["lname"].'</td>
                         <td>'.$value["userid"].'</td>
                         <td>'.$value["pwd"].'</td>
                    </tr>';
      $num = $num+1;
                  }
      }
      catch(PDOException $e){
        }
        $conn=null;
        return $output;
    }
 ?>
