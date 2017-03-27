$(document).ready(function(){
  $("#type").blur(function(){
    var type = $("#type").val();
    if(type=="PDF"){
      $('#export')
        .attr("onclick","$('#dreamhome').tableExport({type:'pdf',pdfFontSize:'10',escape:'false'});");
    }
    else if(type=="PNG"){
      $('#export')
        .attr("onclick","$('#dreamhome').tableExport({type:'png',escape:'false'});");
    }
    else if(type=="Excel"){
      $('#export')
        .attr("onclick","$('#dreamhome').tableExport({type:'excel',escape:'false'});");
    }
    else if(type=="WORD"){
      $('#export')
        .attr("onclick","$('#dreamhome').tableExport({type:'doc',escape:'false'});");
    }
    else if(type=="XML"){
      $('#export')
        .attr("onclick","$('#dreamhome').tableExport({type:'xml',escape:'false'});");
    }
    else if(type=="TXT"){
      $('#export')
        .attr("onclick","$('#dreamhome').tableExport({type:'txt',escape:'false'});");
    }
    else if(type=="CSV"){
      $('#export')
        .attr("onclick","$('#dreamhome').tableExport({type:'csv',escape:'false'});");
    }
  });
});
