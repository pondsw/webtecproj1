<?php
  function fetch_data(){
    $servername = "localhost";
    $username = "root";
    $password = "";
     $output = '';
    try {
      $conn = new PDO("mysql:host=$servername;dbname=dreamhome", $username, $password);
    // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "select b.propertyno ,b.street,b.city,b.postcode,b.type,count(a.propertyno) as viewer from viewing a right join  propertyforrent b on a.propertyno = b.propertyno group by b.propertyno order by viewer desc;";
    // use exec() because no results are returned
    // $conn->exec($sql);
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

      foreach ($stmt->fetchAll() as $key => $value){
        // echo $value["propertyno"];
        $output .= '<tr>
                          <td>'.$value["propertyno"].'</td>
                          <td>'.$value["street"].'</td>
                          <td>'.$value["city"].'</td>
                          <td>'.$value["postcode"].'</td>
                          <td>'.$value["type"].'</td>
                          <td>'.$value["viewer"].'</td>
                     </tr>
                          ';
      }

    }
    catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    return $output;
  }

  if(isset($_POST["create_pdf"]))
  {
    // fetch_data();
    require_once('tcpdf/tcpdf.php');
        $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $obj_pdf->SetCreator(PDF_CREATOR);
        $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");
        $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $obj_pdf->SetDefaultMonospacedFont('helvetica');
        $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
        $obj_pdf->setPrintHeader(false);
        $obj_pdf->setPrintFooter(false);
        $obj_pdf->SetAutoPageBreak(TRUE, 10);
        $obj_pdf->SetFont('helvetica', '', 12);
        $obj_pdf->AddPage();
        $content = '';
        $content .= '
        <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />
        <table border="1" cellspacing="0" cellpadding="5">
             <tr>
                  <th width="15%">propertyno</th>
                  <th width="25%">street</th>
                  <th width="20%">city</th>
                  <th width="20%">postcode</th>
                  <th width="10%">type</th>
                  <th width="10%">viewer</th>
             </tr>
        ';
        $content .= fetch_data();
        $content .= '</table>';
        $obj_pdf->writeHTML($content);
        $obj_pdf->Output('sample.pdf', 'I');

  }
?>
<!DOCTYPE html>
<html>
<head>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
  <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
  <!-- If CDN fails to load, server up the local version -->
  <script>window.jQuery || document.write('<script src="jquery-3.1.1.js"><\/script>');</script>

  <script type="text/javascript" src="tableExport.js"></script>
  <script type="text/javascript" src="jquery.base64.js"></script>
  <script type="text/javascript" src="html2canvas.js"></script>
  <script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
  <script type="text/javascript" src="jspdf/jspdf.js"></script>
  <script type="text/javascript" src="jspdf/libs/base64.js"></script>
  <script>
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
          // alert("pdf");
          $('#dreamhome').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});
          // $.post( "no2.php", function( data ) {
          //   // $( ".result" ).html( data );
          // });
            // $.post( "no2.php", { create_pdf: "create_pdf" } );
        }else{
          $('#dreamhome').tableExport({type:fmt,escape:'false'});
        }
        // var conceptName = $("#selectformat option:selected").text();
        // alert(fmt);
      });
    });
  </script>
</head>
<body>
  <p>
    ข้อที่ 24.ต้องการรู้ว่า แต่ละอสังหามีลูกค้าไปดูจำนวนกี่คน (แสดงทุกอสังหา ถ้าไม่มีคนไปดู ให้แสดงค่า 0)
  </p>

  <!-- <br /><br /> -->
  <div class="container" style="width:700px;">
       <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br />
       <div class="table-responsive">
            <table id="dreamhome" class="table table-striped">
              <thead>
                 <tr class="warning">
                   <th width="15%">propertyno</th>
                   <th width="25%">street</th>
                   <th width="20%">city</th>
                   <th width="20%">postcode</th>
                   <th width="10%">type</th>
                   <th width="10%">viewer</th>
                 </tr>
                </thead>
                <tbody>
            <?php
            echo fetch_data();
            ?>
            </tbody>
            </table>
            <br />
            <form method="post">
                 <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF with TCPDF" />
            </form>
            <br>
            <form id="exportanyformat">
              Export format using jQuery Plugin :
              <select id="selectformat">
                <option value="json">JSON</option>
                <option value="jsonignore">JSON (ignoreColumn)</option>
                <option value="jsontrue">JSON (with Escape)</option>
                <option disabled>----------</option>
                <option value="xml">XML</option>
                <option value="sql">SQL</option>
                <option disabled>----------</option>
                <option value="csv">CSV</option>
                <option value="txt">TXT</option>
                <option disabled>----------</option>
                <option value="excel">XLS</option>
                <option value="doc">Word</option>
                <option value="powerpoint">Powerpoint</option>
                <option disabled>----------</option>
                <option value="png">PNG</option>
                <option value="pdf">PDF</option>
              </select>
              <input type="submit" value="Export">
            </form>

       </div>
  </div>
								<!-- <li><a href="#" onclick="$('#dreamhome').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> <img src="images/pdf.png" width="24px"> PDF</a></li> -->
</body>
</html>
