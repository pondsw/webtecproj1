<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>

<link href="./css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.min.css" rel="stylesheet">
<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/profilebar.css">
<link rel="stylesheet" type="text/css" href="./css/table-c.css">
<link rel="stylesheet" type="text/css" href="./css/modal.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<script type="text/javascript" src="js/permission.js"></script>
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
var myBookId = "";
$(document).on("click", ".open-AddBookDialog", function () {
     $myBookId = $(this).data('id');
     var myStudentName = $(this).data('name');
     $(".modal-body #studentid").text( "Student ID : "+$myBookId );
     $(".modal-body #studentname").text( "Student Name : "+myStudentName );
});

$(document).ready(function() {
    $("#buttonSubmit").click(function(){
         $.ajax({
        type: "POST",
        url: "update-comment.php",
        data: { cid: $myBookId, comment: $("#textarea").val()},
        success:function( msg ) {
         alert( "Data Saved: " + msg );
        }
       });
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

      <li><a id="logoutbtn" style="color:#FFF"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
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


      <div class="col-md-0 col-md-offset-3" >
<div class="panel panel-primary">
		<div class="panel-heading">
						<h3 class="panel-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Student List</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">

							</span>
						</div>
			    </div>


				  <table width="99%" class="table table-hover" id="dev-table">
					  <thead>
						  <tr>
							  <th width="5%"><div align="center">#
							  </div>
						    <th width="18%"><div align="center">Student ID</div></th>
    <th width="18%"><div align="center">Student name</div></th>
							  <th width="15%"><div align="center">Grade</div></th>
							  <th width="15%"><div align="center"></div></th>


						  </tr>
                          <tbody>

                                        <?php
                                        include ('script/database-connect.php');

                                        $conn = connect();
                                        $section = $_GET['section'];
                                        $course = $_GET['course'];
                                        $num = 1;

                                        try {
                                             $stmt = $conn->prepare("SELECT DISTINCT tk.studentid, u.fname, u.lname FROM (section AS s INNER JOIN takescourse AS tk ON s.sectionid=tk.sectionid) INNER JOIN user AS u ON tk.studentid=u.userid WHERE sectionno=$section AND courseid=$course");
                                             $stmt->execute();

                                             foreach($stmt->fetchAll() as $k) {
                                                  echo "<tr>";
                                                  echo "<td><div align='center'>".$num."</div></td>";
          								echo "<td><div align='center'>".$k['studentid']."</div></td>";
          								echo "<td><div align='center'>".$k['fname']." ".$k['lname']."</div></td>";
          								echo "<td><div align='center'>";
          								echo "<select name='grade' style='width: 100px'>";
          								echo "<option value='A'>A</option>";
          								echo "<option value='B'>B</option>";
          								echo "<option value='C'>C</option>";
          								echo "<option value='D'>D</option>";
          							     echo "</select></div></td>";
                                                  echo "<td><div align='center'>";
                                                  echo "<button type='button' class='open-AddBookDialog btn btn-warning btn-sm'  data-toggle='modal' data-target='#myModal' data-id='".$k['studentid']."' data-name='".$k['fname']." ".$k['lname']."'>";
                                                  echo "<span class='fa fa-list-alt' aria-hidden='true'></span> Student profile & Comments </br>";
                                                  echo "</button>";
                                                  echo "</div></td>";
                                                  echo "<tr>";

                                                  $num++;
                                             }
                                        }
                                        catch(PDOException $e) {
                                             echo "Error: " . $e->getMessage();
                                        }
                                        $conn = null;
                                        ?>
                              <td>

              <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header modal-header-info">
                      <div align="center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      </div>
                      <h2 align="center"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Student profile & Comments </h2>

                      </div>
                    <div class="modal-body">
                      <form class="form-horizontal col-sm-12">

                        <div align="center">
                          <table width="500" height="300" border="0" align="center">
                            <tr>
                              <td colspan="4" align="center"><img src="./images/empty.png" width="100px" height="100px" class="img-responsive" alt=""></td>
                              </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                              <th width="50">&nbsp;</th>
                              <td width="430"><div align="center"><label type="text" name="studentid" id="studentid" value=""></label></div></td>
                              <th width="450"><div align="center"><label type="text" name="studentname" id="studentname"></div></th>
                              <td width="30">&nbsp;</td>
                         </center>
                              </tr>
                            <tr>
                              <td>&nbsp;</td>
                              </tr>
                            <tr>
                              <th colspan="4">Comment</th>
                              </tr>
                            <tr>
                              <td colspan="4"><textarea name="textarea" id="textarea" rows="3" class="form-control custom-control" style="resize:none ; width: 500px"  placeholder="-------Comment Here-------" ></textarea></td>
                              </tr>
                            <tr> <td>&nbsp;</td></tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td colspan="2"><div align="right"><button type="button" class="btn btn-success" id="buttonSubmit">Submit</button></div></td>
                              </tr>

                          </table>




                        </div>
                        </form>
                      </div>

                    <div class="modal-footer">
                      <div align="center">
                        <button type="button" class="btn btn-info btn-lg btn-block ">Show more detail</button>

                      </div>
                      </div>
                    </div>
                  </div>
</div>

                              </td>
							</tr>

						</tbody>
					  </thead>

				  </table>
		  </div>

              <button type="button" class="btn btn-success ; pull-right " >
          <span class="glyphicon glyphicon-check"></span> Submit </br>
        </button>



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
