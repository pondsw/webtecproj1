<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title></title>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<link href="./css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/bootstrap.min.css" rel="stylesheet">

<script src="./js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/profilebar.css">
<link rel="stylesheet" type="text/css" href="./css/table-c.css">
<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<script language="JavaScript" type="text/javascript">
function HandleBrowseClick1()
{
    var fileinput = document.getElementById("browse1");
    fileinput.click();
}
function HandleBrowseClick2()
{
    var fileinput = document.getElementById("browse2");
    fileinput.click();
}
function Handlechange1()
{
var fileinput = document.getElementById("browse1");
var textinput = document.getElementById("filename1");
textinput.value = fileinput.files[0].name;
}
function Handlechange2()
{
var fileinput = document.getElementById("browse2");
var textinput = document.getElementById("filename2");
textinput.value = fileinput.files[0].name;
}
function modalClose(){
	var textinput = document.getElementById("filename2");
	textinput.value = "";
}
</script>

</head>
<body>
<!-- Image and text -->


<!--NAVBAR-->
    <nav class="navbar navbar-light bg-faded">
    <div class="container-fluid">
      <div class="navbar-header" > <a class="navbar-brand"  href="#"> <img src="./images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="" > </a>
        <p></br>Learning Management System</p>
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
						Professor
				   </div><div class="profile-usertitle-job">
						<button type="button" class="btn btn-default btn-sm"  data-toggle="modal" data-target="#myModalEdit">

          <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit profile </br>
        </button>
        <div id="myModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             <h2><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile </h2>

      </div>
      <div class="modal-body">
               <form class="form-horizontal col-sm-12">
               
<table width="500" height="300" border="0" align="center">
  <tr>
    <td colspan="4" align="center"><img src="./images/empty.png" width="100px" height="100px" class="img-responsive" alt=""></td>
  </tr>
  <tr> <td>&nbsp;</td></tr>
       <tr>
       <td colspan="2"> Change Profile Picture :   </td>
       <td align="center"> <input type="file" id="browse1" name="fileupload" style="display: none" onChange="Handlechange1();"/>
       <input type="text" id="filename1" /></td>
       <td>
<input type="button" class="btn btn-info" value="Browse" id="fakeBrowse" onclick="HandleBrowseClick1();"/></td>


       </tr>
  <tr> <td>&nbsp;</td></tr>
    <tr>
    <th width="148" colspan="4"><div align="center"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit password</div></th>

  </tr>
   <tr> <td>&nbsp;</td></tr>
  <tr>
    <th width="148"><div align="center">User ID :</div></th>
    <td width="205">&nbsp;</td>
    <th width="196"><div align="center">Name :</div></th>
    <td width="241">&nbsp;</td>
  </tr>
<tr>    	<td>&nbsp;</td></tr>
  <tr>
    <th width="148"><div align="center">Type :</div></th>
    <td width="205">&nbsp;</td>
    <th width="196"><div align="center"></div></th>
    <td width="241">&nbsp;</td>
  </tr>
 <tr> <td>&nbsp;</td></tr>
 
</table>
             
   
  
    
        </form>
      </div>

      <div class="modal-footer">
      <tr>
    <td colspan="4">
      <div align="center"><button type="button" class="btn btn-success btn-lg btn-block ">SAVE</button></div></td>
  </tr>
      </div>
    </div>
  </div>
</div>                   
        
        
        
        
        
				   </div>
				</div>
				</div>
<!----END NAV----->
				<div class="profile-usermenu">
					<ul class="nav">

					  <li ><a href="../w/su/template-admin.html">
							<i class="glyphicon glyphicon-home"></i>
							Home </a>
					  </li>

 						<li >
							<a href="#" >
							<i class="fa fa-user-plus" aria-hidden="true"></i>
							Create User </a>
						</li>
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-book"></i>
							Registration Report </a>
						</li>

					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
	<!-- ADD HERE -->



      <div class="col-md-0 col-md-offset-3" >
                <button type="button" class="btn btn-default btn-sm"  data-toggle="modal" data-target="#myModal">
          <span class="glyphicon glyphicon-plus"></span> Upload File </br>
        </button>
         <button type="button" class="btn btn-success btn-sm" >
          <span class="glyphicon glyphicon-check" id=""></span> Submit </br>
        </button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3><i class="glyphicon glyphicon-plus"></i> Upload file</h3>

      </div>
      
      <form method="post" id="myForm" enctype="multipart/form-data">
      
      <div class="modal-body">

       <table align="center">
       <tr>
       <td> </br></td>

       </tr>
       <tr>
       <td> Choose File :   </td>
       <td align="center"> <input type="file" id="browse2" name="fileupload" style="display: none" onChange="Handlechange2();"/>
       <input type="text" id="filename2" readonly/></td>

       <td>
<input type="button" class="btn btn-info" value="Browse" id="fakeBrowse" onclick="HandleBrowseClick2();"/></td>


       </tr>
              <tr>
       <td> </br></td>

       </tr>
       </table>

      </div>
      <div class="modal-footer">

        <input type="submit" class="btn btn-success" name="submit">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="modalClose()">Close</button>
        

      </div>
      </form>
    </div>
  </div>
  </div>
        <div>
        <br>
        </div>
<div class="panel panel-primary">
				<div class="panel-heading">
						<h3 class="panel-title">Registration Report</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">

							</span>
						</div>
			    </div>
				<?php 
                    if(isset($_POST["submit"])){
                        if(isset($_FILES["fileupload"])){
                            
                      $errors= array();
                      $file_name = $_FILES['fileupload']['name'];
                      $tis620 = iconv('UTF-8','TIS-620',$file_name);
                      $file_size =$_FILES['fileupload']['size'];
                      $file_tmp =$_FILES['fileupload']['tmp_name'];
                      $file_type=$_FILES['fileupload']['type'];
                      
                      $file_ext=strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
                      
                      $expensions= array("csv","xls","xlsx");
                      
                      if(in_array($file_ext,$expensions)=== false){
                         $errors[]="extension not allowed, please choose a CSV , XLS or XLSX file.";
                      }
                      
                      if($file_size > 2097152){
                         $errors[]='File size must be excately 2 MB';
                      }
                      
                      if(empty($errors)==true){
                         move_uploaded_file($file_tmp,"document/".$tis620);
                         
                        /* $insert_query = "INSERT INTO tbl_users (userName,userProfession,userPic) VALUES (:uname,:uprof,:upic)";
                         $stmt = $DB_con->prepare($insert_query);
                         $stmt->bindParam(':uname',$name);
                         $stmt->bindParam(':uprof',$prof);
                         $stmt->bindParam(':upic',$file_name);
                         $stmt->execute();*/
                      }else{
                         print_r($errors);
                      }
					  $handle = fopen("document/$tis620", "r");
					  echo "<table width='99%' class='table table-hover' id='dev-table'>";
					  echo "<thead>";

					  $csvcontents = fgetcsv($handle);
					  echo "<tr>";
					  
        			  	echo "<th >$csvcontents[0]</th>";
						echo "<th >$csvcontents[1]</th>";
						echo "<th >$csvcontents[2]</th>";
						echo "<th >$csvcontents[3]</th>";
					  
                      echo "</tr>";
					  
				      echo "<tr>";
					  $csvcontents = fgetcsv($handle);
					  echo "<th width='12%' >#";
					  echo " <th width='32%'>$csvcontents[0]</th>";
   					  echo  "<th width='33%'>$csvcontents[1]</th>";
					  echo	  "<th width='23%'>$csvcontents[2]</th>";
			
					  echo	"</tr>";
					  $count = 0;
					  while ($csvcontents = fgetcsv($handle)) { 
					  	 $count = $count+1;
	                     echo '<tr>';
						 echo "<th>$count";
						 echo "<th >$csvcontents[0]</th>";
   					     echo "<th >$csvcontents[1]</th>";
					     echo "<th >$csvcontents[2]</th>";
						 echo '</tr>';
					  }
					  
					  
					  echo "</thead>";
					  echo "</table>";
						
						
						}
                  }
                    
                ?>
				 
		  </div>







      <!-- END ADD -->
  </div>

          <h3 class="panel-title">&nbsp;	</h3>
</div>
      </div>
    </div>
</div>
</div>


</body>
</html>
