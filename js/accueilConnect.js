function testConnection() {
  ndcT = $("#ndc").val();
  mdpT = $("#mdp").val();

  if(!ndc || !mdp){
    alert("Nom de compte ou mot de passe non renseigné");
    return ;
  }

  $.get("Classes\\connect.php",{ndc : ndcT, mdp : mdpT},function(data) {
    if(data==0){
      alert("Nom de compte ou mot de passe incorrect");
    }
  });
}
