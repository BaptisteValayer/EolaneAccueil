<?php
	require_once "DAO.php";
	require_once "MaBD.php";
	require_once "MaBdDao.php";
	require_once "transfertdonne.php";
	
	/*
	 * On test si les données trasmisent par l'url existe
	*/
	if (isset ( $_GET ["ipr"] )) {
		$IPR = $_GET ["ipr"];
	} else {
		return "ERROR";
	}
	
	// Instanciation d'un objet xlsfileDAO
	$maBD = new MaBdDao( MaBD::getInstance () );
	$res = $maBD->getOne ( $IPR );
	
	// Retourne le résultat de getOne et l'encode en JSON
	echo json_encode ( $res );
?>
