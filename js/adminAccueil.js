var actif = 0;

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

  var BtnS = new Bouton();
  BtnS.init("admin");
  $("#navbar > ul >li").click(function(){
        rafraichir($(this).index());
  });
  $(".main").css("padding-top","50px")
            .hide();
  rafraichir(actif);
});

function addNewMessage() {
  text = $("#textemsg").val();
  date = $("#datemsg").val();
if(text == "" || date == ""){alert("Il manque des informations");}
else{
  $.post("Classes/addRow.php?message="+text+"&dateFin="+date).done(function(data) {
    alert("information ajoutée");
    initInfoBoxTab();
  });
}
}

function addNewBtn() {
  Legende = $("#legendeBtn").val();
  nomImg = $("#ImgBtn").val();
  url = $("#url").val();
	x=nomImg.indexOf("fakepath");
	if(x>=0){
		console.log("in");
		nomImg=nomImg.split("C:\\fakepath\\")[1];
	}
if(Legende == "" || nomImg == "" || url == ""){alert("Il manque des informations");}
else{
  $.post("Classes/addBtn.php?legende="+Legende+"&nomfichier="+nomImg+"&url="+url).done(function(data) {
    alert("Bouton ajouté");
    initBtnTab();
  });
}
}

/**
 * Appel de UpdateDataBase.php et ouvre un popUp quand elle s'est bien terminée
 */
function resetDatabase() {
	$.post("Classes/UpdateDataBase.php").done(function(data) {
		alert("La base de donnée à été mise à jour");
	});
}

function resetAchivedMessage() {
	$.post("Classes/DropDate.php").done(function(data) {
		alert("Les Vieux messages ont été supprimé");
    initInfoBoxTab();
	});
}

function rafraichir(nouveau) {
    $(".main").eq(actif).hide();
    $(".main").eq(nouveau).show();
    actif=nouveau;
}

function initInfoBoxTab() {
  $("#ulimitedDate").attr('checked', false);
  $("#textemsg").val("");
  $("#datemsg").val();
  var infoB = new InfoBox();
  infoB.init();
}

function initBtnTab() {
  $("#legendeBtn").val("");
  $("#ImgBtn").val("");
  $("#url").val("");
  var BtnS = new Bouton();
  BtnS.init("admin");
}
