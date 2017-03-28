<?php
          //import library
          require("packages/autoload.php");

          use Endroid\QrCode\QrCode;

          $courseid = "";
          $section = "";

          $courseid = $_POST["courseid"];
          $section = $_POST["section"];

          $courseInfo = "$courseid"." - "."$section";

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
