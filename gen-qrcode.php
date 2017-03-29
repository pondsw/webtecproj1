<?php
          //import library
          require("packages/autoload.php");

          use Endroid\QrCode\QrCode;

          $courseid = "";
          $section = "";

          $courseid = $_POST["courseid"];
          $section = $_POST["section"];
          $code = $_POST["code"];
          $date = $_POST["date"];
          $timestop = $_POST["timestop"];

          $courseInfo = "127.0.0.1/student-atten-qrcode.php?code=$code";

          //Generate QR Code
          $qrCode = new QrCode();
          $qrCode
          ->setText($courseInfo)
          ->setSize(300)
          ->setPadding(10)
          ->setErrorCorrection('high')
          ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0])
          ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0])
          ->setLabel($courseid)
          ->setLabelFontSize(18)
          ->setImageType(QrCode::IMAGE_TYPE_PNG)
          ;

          $saveAt = "qrcode/"."$courseid"."-"."$section".".png";
          // save it to a file
          $qrCode->save($saveAt);
?>
