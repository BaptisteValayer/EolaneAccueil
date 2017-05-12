function testConnection() {
  ndcT = $("#ndc").val();
  mdpT = $("#mdp").val();
  if(ndcT=="" || mdpT==""){
    alert("Nom de compte ou mot de passe non renseigné");
    return 0;
  }
  $.get("Classes\\connect.php",{ndc : ndcT, mdp : mdpT},function(data) {
    if(data=="false"){
      alert("Nom de compte ou mot de passe incorrect");
    }
    else {
      location.href="PageAdministration.php";
    }
  });
}
