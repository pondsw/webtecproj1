<?php
  if(isset($_POST['action'])){
    if($_POST['action'] == "checkprem" ){
      $t = $_POST['type'];
      echo checkprem($t);
    }else if($_POST['action'] == "logout" ){
      session_start();
      session_destroy();
    }
  }

  function checkprem($t){
    session_start();
    $str = substr($t, 14, 1);
    $str = strtoupper($str);

    if(isset($_SESSION["userid"])){
      $userid =  $_SESSION["userid"];
      $type =  $_SESSION["type"];
      $lname =  $_SESSION["lname"];
      $fname =  $_SESSION["fname"];
      if($type == "T" && strpos($t, 'teacher')){
        $arr = array('prem' => true);
        $arr['userid'] = $userid;
        $arr['type'] = $type;
        $arr['fname'] = $fname;
        $arr['lname'] = $lname;
        return json_encode($arr);
      }else if($type == "S" && strpos($t, 'student')){
        $arr = array('prem' => true);
        $arr['userid'] = $userid;
        $arr['type'] = $type;
        $arr['fname'] = $fname;
        $arr['lname'] = $lname;
        return json_encode($arr);
      }else if($type == "A" && strpos($t, 'admin')){
        $arr = array('prem' => true);
        $arr['userid'] = $userid;
        $arr['type'] = $type;
        $arr['fname'] = $fname;
        $arr['lname'] = $lname;
        return json_encode($arr);


      }else{
        $arr = array('prem' => $t);
        session_destroy();
        return  json_encode($arr);
      }
    }else{
      $arr = array('prem' => false);
      return  json_encode($arr);
    }

  }
?>
