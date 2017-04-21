<?php
	require_once "DAO.php";
	require_once "MaBD.php";
	require_once "MaBdDao.php";
	require_once "transfertdonne.php";

	/*
	 * On test si les donn�es trasmisent par l'url existe
	*/
	if (isset ( $_GET ["ipr"] )) {
		$IPR = $_GET ["ipr"];
	} else {
		return "ERROR";
	}

	// Instanciation d'un objet MaBdDao
	$maBD = new MaBdDao( MaBD::getInstance () );
	$res = $maBD->getOneArticle( $IPR );

	// Retourne le r�sultat de getOne et l'encode en JSON
	echo json_encode ( $res );
?>
