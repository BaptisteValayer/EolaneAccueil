<?php

	// Autochargement des classes
	function __autoload($class) {
		require_once "Classes/$class.php";
	}
	$maBD = new MaBdDao ( MaBD::getInstance () );

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
	<script src="js/timer.js"></script>
	<script src="js/init.js"></script>
</head>

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
					<figcaption>Opérateur SAP</figcaption>
				</figure>
			</a>

			<a href="http://10.100.13.53/fr">
				<figure id="figureimg">
					<img id="logo" src="img/logoeolity.png"></img>
					<figcaption>Éolity</figcaption>
				</figure>
			</a>

			<a href='Classes\download.php?filename=BDN008 Portail SSE.xls&path=\\val-fs01\Services\SANTE SECURITE ENVIRONNEMENT\&unslipt=Y'>
				<figure id="figureimg">
					<img id="logo" src="img/logomedic.png"></img>
					<figcaption>Santé&sécurité</figcaption>
				</figure>
			</a>

			<a href='Classes\download.php?filename=SMQ000_A -Référentiel Qualité Valence.xls&path=\\val-fs01\Services\QUALITE\1. REFERENTIEL\&unslipt=Y'>
				<figure id="figureimg">
					<img id="logo" src="img/logoqualite.png"></img>
					<figcaption>Référenciel qualit&eacute</figcaption>
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
		<button type="button" class="btn btn-primary" onclick="findObject();">
			<span class="glyphicon glyphicon-search"></span>
		</button>
	</div>

	<div id="SearchResult"></div>
</body>
</html>
