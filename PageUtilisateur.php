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
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/accueil.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/accueil.js"></script>
	<script src="js/timer.js"></script>
	<script src="js/boutons.js"></script>
	<script src="js/infobox.js"></script>
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
