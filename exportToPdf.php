<?php

if(isset($_POST['export']))
{
$export = $_POST["export"];
echo export($export);
}

function export($export){
  // $username = "webtech";
  // $password = "P@ssw0rd";
  // $dbname = "learningsystem";
  // $servername = "188.166.223.106";
  //
  // try {
  //   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    require_once('tcpdf/tcpdf.php');

       $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
       $obj_pdf->SetCreator(PDF_CREATOR);
       $obj_pdf->SetTitle("USER TABLE");
       $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
       $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
       $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
       $obj_pdf->SetDefaultMonospacedFont('helvetica');
       $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
       $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
       $obj_pdf->setPrintHeader(false);
       $obj_pdf->setPrintFooter(false);
       $obj_pdf->SetAutoPageBreak(TRUE, 10);
       $obj_pdf->SetFont('helvetica','B', 12);
       $obj_pdf->AddPage();
       $content = '';
       $content .= '
       <h3 align="center">USER TABLE</h3><br /><br />
       <table width="99%" class="table table-hover" id="dev-table">
       					  <thead>
       						  <tr>
       							  <th width="11%">#
       							  <th width="22%">Firstname</th>
                       <th width="23%">Lastname</th>
       							  <th width="21%">User ID</th>
       							  <th width="23%">Password</th>
       						  </tr>
       ';
       $content .= $export;
       $content .= '</table>';
       $obj_pdf->writeHTML($content);

       $obj_pdf->Output('UserTable.pdf', 'I');
        $conn=null;
        return $content;
    }
 ?><html>
 <head>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
   <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
   <!-- If CDN fails to load, server up the local version -->
   <script>window.jQuery || document.write('<script src="jquery-3.1.1.js"><\/script>');</script>

   <script type="text/javascript" src=".js/tableExport.js"></script>
   <script type="text/javascript" src=".js/jquery.base64.js"></script>
   <script type="text/javascript" src=".js/html2canvas.js"></script>
   <script type="text/javascript" src=".jspdf/libs/sprintf.js"></script>
   <script type="text/javascript" src=".jspdf/jspdf.js"></script>
   <script type="text/javascript" src=".jspdf/libs/base64.js"></script>
   <!-- <script>
     $(document).ready(function(){
       $("#exportanyformat").submit(function(){
       // var conceptName = $( "#selectformat option:selected" ).text();
         // var conceptName = $('#selectformat').find(":selected").text();
         var fmt = $("#selectformat").val();
         if(fmt == 'jsonignore'){
           $('#dreamhome').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});
         }else if(fmt == 'jsontrue'){
           $('#dreamhome').tableExport({type:'json',escape:'true'});
         }else if(fmt == 'sql'){
           $('#dreamhome').tableExport({type:'sql'});
         }else if(fmt == 'pdf'){
           $('#dreamhome').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});
         }else{
           $('#dreamhome').tableExport({type:fmt,escape:'false'});
         }
         // var conceptName = $("#selectformat option:selected").text();
         // alert(fmt);
       });
     });
   </script> -->
 </head>
 <body>

 </body>
 </html>
