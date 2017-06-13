<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/accueilConnect.js"></script>
</head>

<!--<body>
  <div id="ConnexionForm">
    <p>Identifiant : <input id="ndc" type="text"/></p>
    <p>Mot de passe : <input id="mdp" type="password"/></p>
    <button onClick="testConnection()">Se connecter</button>
</body>-->
<div id="ConnexionForm" class="container">
      <div class="form-signin">
        <h2 class="form-signin-heading">Se connecter</h2>
        <label for="ndc" class="sr-only">Nom de compte</label>
        <input id="ndc" class="form-control" placeholder="Nom de compte" autofocus="" type="text">
        <label for="mdp" class="sr-only">Password</label>
        <input id="mdp" class="form-control" placeholder="Password" type="password">
        <button class="btn btn-lg btn-primary btn-block" onClick="testConnection()">Connexion</button>
      </div>
</div>

</html>
