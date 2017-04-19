<?php

	// Autochargement des classes
	function __autoload($class) {
		require_once "Classes/$class.php";
	}
	$maBD = new MaBdDao ( MaBD::getInstance () );
	//require_once ("InfoBox.php");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/accueil.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/accueil.js"></script>
</head>
<body>


<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand">
					<img src="img/logoEolane.png"></img>
				</a>
			</div>
	        <?php
				$date = date ( "d-m-Y" );
				$heure = date ( "H:i" );
				$numSemaine = date ( "W" );
				echo "<table id='dateHeure' class='table-bordered'><tr><td>$heure</td><td>$date</td></tr><tr><td></td><td>semaine  $numSemaine</td></tr></table>";
			?>
      	</div>
	</nav>

	<div class="container" id="containere">

		<div class="starter-template">
			<a onClick="hideVisibleSearch();">
				<figure id="figureimg">
					<img id="logo" src="img/logoIprsearch.png"></img>
					<figcaption>Rechercher un IPR</figcaption>
				</figure>
			</a>
			
			<a href="http://10.100.13.22/auth">
				<figure id="figureimg">
					<img id="logo" src="img/logosap.png"></img>
					<figcaption>Portail opérateur SAP</figcaption>
				</figure>
			</a>
			
			<a href="http://10.100.13.53/fr">
				<figure id="figureimg">
					<img id="logo" src="img/logoeolity.png"></img>
					<figcaption>Éolity</figcaption>
				</figure>
			</a>
			
			<a href="file:///\\val-fs01\services\SANTE%20SECURITE%20ENVIRONNEMENT\BDN008%20Portail%20SSE.xls">
				<figure id="figureimg">
					<img id="logo" src="img/logomedic.png"></img>
					<figcaption>Portail santé et sécurité</figcaption>
				</figure>
			</a>
			
			<a href="file:///\\val-fs01\services\QUALITE\1.%20REFERENTIEL\SMQ000_A%20-Référentiel%20Qualité%20Valence.xls">
				<figure id="figureimg">
					<img id="logo" src="img/logoqualite.png"></img>
					<figcaption>Référenciel qualité</figcaption>
				</figure>
			</a>
			
			<a href="http://lybod01.eolane.com:8089/">
				<figure id="figureimg">
					<img id="logo" src="img/logobadgeur.png"></img>
					<figcaption>Éolane badgeur</figcaption>
				</figure>
			</a>
			
			<a href="http://hello.eolane.com/SitePages/Home.aspx">
				<figure id="figureimg">
					<img id="logo" src="img/logohello.png"></img>
					<figcaption>Portail Éolane</figcaption>
				</figure>
			</a>
		</div>
	</div>
	
	<div id="form">
	
		<input type="text" id="IPRZone" value=""></input>
		<button type="button" class="btn btn-warning" onclick="findObject();">
			<span class="glyphicon glyphicon-search"></span>
		</button>
		<button type="button" class="btn btn-warning" onclick="resetDatabase();">
			<span class="glyphicon glyphicon-refresh"></span>
		</button>
	</div>
	
	<div id="InfoBox"></div>
</body>
</html>
