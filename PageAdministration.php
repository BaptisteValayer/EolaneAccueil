<?php
session_start();
if ( !isset($_SESSION['id'])){
	include("connexion.php");
	header('Location : connexion.php');
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
	<script src="js/boutons.js"></script>
	<script src="js/timer.js"></script>
	<script src="js/init.js"></script>
	<script src="js/adminAccueil.js"></script>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
	  	<div class="navbar-header">
	    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	      	<span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	       </button>
	       <p class="navbar-brand">EolaneAdmin</p>
	     </div>
	     <div id="navbar" class="collapse navbar-collapse">
	     	<ul class="nav navbar-nav">
	      	<li><a href="#InfoBoxDiv">Infobox</a></li>
	        <li><a href="#IprBaseAction">Base De Donnee IPR</a></li>
	        <li><a href="#ModifierPageUtilisateur">Interface Utilisateur</a></li>
	      </ul>
	     </div><!--/.nav-collapse -->
		 </div>
	</nav>
	<div class="container">
		<div class="starter-template">

		  <div class="main" id="InfoBoxDiv">
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
					<br>
					<p id="textMAJ">Suppimer les messages trop ancien :
						<button type="button" class="btn btn-warning" onclick="resetAchivedMessage();">
							<span class="glyphicon glyphicon-refresh"></span>
						</button>
					</p>
		  </div>

			<div class="main" id="IprBaseAction">
				<h1> Base de donnée IPR :</h1>
				<p id="textMAJ">Mettre à jour la Base de Données :
					<button type="button" class="btn btn-warning" onclick="resetDatabase();">
						<span class="glyphicon glyphicon-refresh"></span>
					</button>
				</p>
			</div>

			<div class="main" id="ModifierPageUtilisateur">
				<h1>Liste Boutons de la page utilisateurs:</h1>
				<table id="ListBtn" class="table-striped table-condensed">
					<thead>
						<tr>
							<th></th>
							<th>Legende du bouton</th>
							<th>Image du bouton</th>
							<th>url</th>
							<th></th>
						</tr>
					</thead>
					<tbody id="listBtnBody">
					</tbody>
					<tfoot>
							<tr>
									<td></td>
									<td><input type="text" id="legendeBtn" placeholder="Texte du message"></input></td>
									<td>
										<input id="ImgBtn" type="file" name="image" accept="image/*">
									</td>
									<td><input type="text" id="url" placeholder="url de renvoie"></input></td>
									<td><span class="glyphicon glyphicon-plus" onclick="addNewBtn();"></span></td>
							</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
