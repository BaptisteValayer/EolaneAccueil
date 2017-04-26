<?php
	require_once "DAO.php";
	require_once "MaBD.php";
	require_once "ConnexionDAO.php";

	/*
	 * On test si les donn�es trasmisent par l'url existe
	*/
	if (isset ( $_GET ["ndc"] ) && isset ( $_GET ["mdp"] )) {
		$ndc = $_GET ["ndc"];
    $mdp = $_GET ["mdp"];
	} else {
		echo "ERROR";
	}

	// Instanciation d'un objet MaBdDao
	$maBD = new ConnexionDAO( MaBD::getInstance () );
	$res = $maBD->getOne( $ndc, $mdp );

	if (!$res) {
    echo "false";
  }
  else {
    session_start();
    $_SESSION['id'] = $res['id'];
    header('Location:..\\PageAdministration.php');
  }
?>
