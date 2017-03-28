<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>

<link href="./css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/profilebar.css">
<link rel="stylesheet" type="text/css" href="./css/table-c.css">
<link rel="stylesheet" type="text/css" href="./css/modal.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.navbar.navbar-light.bg-faded .nav.navbar-nav.navbar-right li a .glyphicon-glyphicon-log-in {
 color: #FFFFFF;
}
.navbar.navbar-light.bg-faded .nav.navbar-nav.navbar-right li a .glyphicon-glyphicon-log-in {
 color: #FFFFFF;
}
</style>
<script>
function loadb(){
 $('#detailpro').show();
 }

</script>
<script>
$(document).ready(function(){

    $("#submitbtn").click(function(){
      var qrcode = $(".qrcode").val();
      $.get( "student_checkin.php", { 'code': qrcode } ).done(function( data ) {
            alert(data);
        });
    });
});
</script>
<script>
function loadb(){
	$('#detailpro').show();
	}

function decode(){

	if(document.getElementById("file").files.length == 0){
		alert("upload your qrcode");
	}
	else{
		var file = document.getElementById("upload").files[0].name;
		var text = document.getElementById("qrText");
		$("#qrImg").attr('src',file);
		var image = document.getElementById("qrImg");
		var qr = new QCodeDecoder();
		qr.decodeFromImage(image, function (err, result) {
      	if (err) throw err;
      		text.value = result;
  		});
	}
	loadb();
}
</script>
</head>
<body>
<!-- Image and text -->


    <nav class="navbar navbar-light bg-faded">
    <div class="container-fluid">
    <div class="container-fluid">
      <div class="navbar-header" > <a class="navbar-brand"  href="#"><img src="images/logo2.png" width="170" height="50" class="d-inline-block align-top" alt="" ></a>
        </br> &nbsp;
      </div>

	<ul class="nav navbar-nav navbar-right">


      <li><a href="loginpage.html" style="color:#FFF"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row profile">
  <div class="col-md-3">
   <div class="profile-sidebar">
    <!-- SIDEBAR USERPIC -->
    <div class="profile-userpic">
     <img src="./images/empty.png" width="50px" height="50px" class="img-responsive" alt="">

                 <div class="profile-usertitle">
     <div class="profile-usertitle-name">
      Name
     </div>
     <div class="profile-usertitle-job">
      Student
       </div>
    </div>
    </div>
    <!-- END SIDEBAR USERPIC -->
    <!-- SIDEBAR USER TITLE -->

    <!-- END SIDEBAR USER TITLE -->
    <!-- SIDEBAR BUTTONS -->

    <!-- END SIDEBAR BUTTONS -->
    <!-- SIDEBAR MENU -->
    <div class="profile-usermenu">
     <ul class="nav">

       <li ><a href="student-homej.html">
       <i class="glyphicon glyphicon-home"></i>
       Home </a>
       </li>
      <li class="active"><a href="student-atten.html">
       <i class="glyphicon glyphicon-check"></i>
       <span>Attendance</span> </a>
      </li>

      <li  >
       <a href="student-grade.html" >
       <i class="glyphicon glyphicon-pencil"></i>
       Grade report </a>
      </li>


     </ul>
    </div>
    <!-- END MENU -->
   </div>
  </div>
 <!-- ADD HERE -->
               <div class="row">
   <div class="col-md-6 col-md-offset-1">
     <div class="panel panel-primary">
     <div class="panel-heading">
      <h1 class="panel-title"></i><i class="glyphicon glyphicon-check"></i> Attendance </h1>
     </div>
     <div class="panel-body">

     </div>

    <table width="99%"  id="dev-table">
       <thead>

                       <tr><td colspan="4">&nbsp;</td> </tr>
      <tr><td colspan="4">&nbsp;</td> </tr>
      <tr>
       <th width="12%">
          <th width="19%" style="font-size:18px">QRcode</th>

<?php
     $code = $_GET['code'];

          echo "<th width='43%'' align='center'><input id='qrText' align='center' type='text' class='qrcode' value='$code'></th>";
?>
       <th width="26%"> <input id= "submitbtn" class="btn btn-success" type="button" value="Submit"></button>

                               <div class="modal fade" id="myModal" role="dialog">

                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header modal-header-info">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h1 class="modal-title">Attendance</h1>
                                    </div>
                                    <div class="modal-body">
                                     <div align="center"> <img src="images/check.png" width="150px" height="150px" class="img-responsive" alt=""> </div>
                                      <p style="color:#000 ; font-size:24px ; text-align:center" >Scan completed!</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>







                               </th>
         </tr>
         <tr>
           <td colspan="4"  align="center">OR</td>


         </tr>
         <tr>
           <td></td>
           <td align="right"></td>
           <td align="center"><p><img id="qrImg" src="./images/qrcode.png" width="50px" height="50px"></p>
                           <label for="upload" class="btn btn-success" style="margin-bottom:10px">
                             <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                               <input type="file" id="upload" style="display:none">
                               &nbsp;Upload Your QRcode
                           </label>
             <p><a href="" class="btn btn-success"   onClick="decode()">Scan QRcode</a></p></td></td>
           <td width="3%"></td>

         </tr>
         </tbody>
         <td height="2">

       </table>
    </div>
   </div>





      <!-- END ADD -->
  </div>

          <h3 class="panel-title">&nbsp;</h3>
</div>
      </div>
    </div>
</div>
</div>


</body>
</html>
