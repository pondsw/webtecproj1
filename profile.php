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
      if($str == $type){
        $arr = array('prem' => true);
        $arr['userid'] = $userid;
        $arr['type'] = $type;
        $arr['fname'] = $fname;
        $arr['lname'] = $lname;
        return json_encode($arr);
      }else{
        $arr = array('prem' => false);
        session_destroy();
        return  json_encode($arr);
      }
    }else{
      $arr = array('prem' => false);
      return  json_encode($arr);
    }

  }
?>
