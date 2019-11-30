$(document).ready(function(){
  var expanded = false;
  $("#menu-toggle").click(
    function(e){
    e.preventDefault();
    if(!expanded)
      document.getElementById("arrow").className = "glyphicon glyphicon-chevron-left";
    else
      document.getElementById("arrow").className = "glyphicon glyphicon-chevron-right";
    expanded=!expanded;
    $("#wrapper").toggleClass("menuDisplayed");
  }
);
});
