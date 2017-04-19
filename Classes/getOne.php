<?php
	function __autoload($class) {
		require_once "Classes/$class.php";
	}
	require_once "Classes/xlsfileDAO.php";
	require_once "Classes/transfertdonne.php";
	
	/*
	 * On test si les données trasmisent par l'url existe
	*/
	if (isset ( $_GET ["ipr"] )) {
		$IPR = $_GET ["ipr"];
	} else {
		return "ERROR";
	}
	
	// Instanciation d'un objet xlsfileDAO
	$maBD = new xlsfileDAO ( MaBD::getInstance () );
	$res = $maBD->getOne ( $IPR );
	
	// Retourne le résultat de getOne et l'encode en JSON
	return json_encode ( $res );
?>
