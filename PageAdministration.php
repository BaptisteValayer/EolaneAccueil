<?php
session_start();
if ( !isset($_SESSION['id'])){
	include("connexion.php");
	header('Location : connexion.php');
	//'<scrip>console.log("oui");</scipt>';
	exit();
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/administration.css" rel="stylesheet" >
	<link href="js/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/infobox.js"></script>
	<script src="js/timer.js"></script>
	<script src="js/adminAccueil.js"></script>
</head>

<body>

  <div>
			<h1> Infobox :</h1>
      <table id="InfoBox" class="table-striped table-condensed">
				<thead>
	        <tr>
	          <th></th>
	          <th>Texte du message</th>
	          <th>Date de Fin d'utilisation du message</th>
	          <th></th>
	        </tr>
				</thead>
				<tbody id="TrinfoBoxDom">
        </tbody>
				<tfoot>
						<tr>
								<td></td>
								<td><input type="text" id="textemsg" placeholder="Texte du message"></input></td>
								<td>
									<input type="text" id="datemsg" placeholder="Date de Fin // si aucune : cocher->"></input>
									<input type="checkbox" id="ulimitedDate"></input>
								</td>
								<td><span class="glyphicon glyphicon-plus" onclick="addNewMessage();"></span></td>
						</tr>
				</tfoot>
      </table>
  </div>
	<div>
		<h1> Base de donnée IPR :</h1>
		<p id="textMAJ">Mettre à jour la Base de Données
			<button type="button" class="btn btn-warning" onclick="resetDatabase();">
				<span class="glyphicon glyphicon-refresh"></span>
			</button>
		</p>
	</div>

</body>
</html>
