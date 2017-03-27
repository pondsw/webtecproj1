<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>

<link href="./css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<!-- <link href="./css/bootstrap-responsive.min.css" rel="stylesheet"> -->
<!-- <script src="./js/jquery.js"></script> -->
<!-- <script src="./js/bootstrap.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="./css/profilebar.css">
<link rel="stylesheet" type="text/css" href="./css/table-c.css">
<link rel="stylesheet" type="text/css" href="./css/modal.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">

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
<script type="text/javascript">
     function fetch_select(val){
          $.ajax({
               type: 'post',
               url: 'fetch_section.php?teacherid="5710000000"',
               data: {
                    get_option:val
               },
               success : function (response){
                    document.getElementById("select_section").innerHTML=response;
               }
          })
     }
     $(document).ready(function(){
          $("#buttonSubmit").click(function(){

          });
     });
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

      <li><a href="loginpage.html" style="color:#FFF"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
       <td align="center"> <input type="file" id="browse" name="fileupload" style="display: none" onChange="Handlechange();"/>
       <input type="text" id="filename" /></td>
       <td>
<input type="button" class="btn btn-info" value="Browse" id="fakeBrowse" onclick="HandleBrowseClick();"/></td>


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
						<li ><a href="teacher-home.html">
							<i class="glyphicon glyphicon-home"></i>Home </a>
					  	</li>
						<li class="active"><a href="teacher-courselist.php">
							<i class="fa fa-book" aria-hidden="true"></i>

							<span>Course-list</span> </a>
						</li>

						<li>
							<a href="teacher-Atten.html" >
							<i class="fa fa-check-square-o" aria-hidden="true"></i>
							Attendance </a>
						</li>

        				<li>
							<a href="teacher-crosscheck.html" >
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							Cross check </a>
						</li>

          				<li>
							<a href="teacher-findstudent-search.html" >
							<i class="fa fa-search" aria-hidden="true"></i>
							Find Student </a>
						</li>


					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
	<!-- ADD HERE -->
     <form action="teacher-studentlist.php" method="get">
              <div class="row">
			<div class="col-md-6 col-md-offset-1">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Course list</h3>

					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>

					<table class="" id="dev-table" align="center">
						<thead>
                        <tr>
							<td >&nbsp;</td>
							</tr>
							<tr>
							<th width="332" style="text-align:center ; font-size:18px">Select Course</th>
							</tr>
                            <tr>
							<td >&nbsp;</td>
							</tr>
						</thead>
						<tbody>
							<tr>
							    <td align="center">    <select name="course" id="course" onchange="fetch_select(this.value)" style="width: 150px">
                                            <option>Select Course</option>
                                            <?php
                                            include ('script/database-connect.php');

                                            $conn = connect();

                                            try {
                                                 $stmt = $conn->prepare("SELECT DISTINCT courseid FROM teachcourse AS tc INNER JOIN section AS s ON tc.sectionid=s.sectionid WHERE tc.teacherid='5710000000'");
                                                 $stmt->execute();

                                                 foreach($stmt->fetchAll() as $k) {
                                                      echo "<option value='" . $k['courseid'] ."'>" . $k['courseid'] ."</option>";
                                                 }
                                            }
                                            catch(PDOException $e) {
                                                 echo "Error: " . $e->getMessage();
                                            }
                                            $conn = null;
                                            ?>
     </select>	</td>
							</tr>
                            <tr>
							<td >&nbsp;</td>
							</tr>

							<tr>
								<th style="text-align:center ; font-size:18px">Select Section</th>
							</tr>
                            <tr>
							<td >&nbsp;</td>
							</tr>
							<tr>
								 <td align="center"><select name="section" id="select_section" style="width: 150px">
                                   </select> </td>
							</tr>
                                   <tr>
							      <td >&nbsp;</td>
							</tr>
                				<tr>
	                                    <td align="center" ><input type="submit" class="btn btn-warning btn-lg btn-block"></td>

							</tr>
                                   <tr>
							<td >&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>





      <!-- END ADD -->
  </div>

          <h3 class="panel-title">&nbsp;</h3>

  

</form>

</body>
</html>
