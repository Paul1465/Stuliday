  function snackFunction() { 
    // Get the snackbar DIV
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ); }, 4000);
    setTimeout("location.href = 'annonces.php';",3000);  

};


$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
  });
  $('#datepicker1').datepicker({
    uiLibrary: 'bootstrap4'
  });


  $(function(){
$('[data-toggle="popover"]').popover()
});

$(function () {
$('[data-toggle="tooltip"]').tooltip()
});




