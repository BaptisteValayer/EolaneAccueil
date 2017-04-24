$(document).ready(function() {
  var infoB = new InfoBox();
  infoB.init();
  $("#datemsg").datepicker();
  $("#ulimitedDate").change( function() {
    if($(this).is(":checked")){
      $("#datemsg").datepicker( "destroy");
      $("#datemsg").val("Sans limite");
    }
    else {
      $("#datemsg").val("");
      $("#datemsg").datepicker();
    }
  });
});

function addNewMessage() {
  text = $("#textemsg").val();
  date = $("#datemsg").val();
  $.post("Classes\\addRow.php?message="+text+"&dateFin="+date).done(function(data) {
    alert("information ajoutée");
    $("#ulimitedDate").attr('checked', false);;
    $("#textemsg").val("");
    $("#datemsg").val();
    var infoB = new InfoBox();
    infoB.init();
  });
}
