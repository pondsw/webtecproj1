$(document).ready(function(){
    $.post( "profile.php", { 'action' : 'checkprem' , 'type':  window.location.pathname },
        function(response,status){
          var obj = JSON.parse(response);
          if(obj['prem'] == false ){
            location.replace("loginpage.html");
          }

        }
    );
    $("#logoutbtn").click(function(){
      $.post( "profile.php", { 'action' : 'logout' },
          function(response,status){
            location.replace("loginpage.html");

          }
      );
    });
});
