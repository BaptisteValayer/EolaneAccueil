<?php
	require_once "PHPExcel.php";
	require_once "transfertdonne.php";
	require_once "DAO.php";
	require_once "MaBD.php";
	require_once "maBdDao.php";

	
	// Instanciation d'un objet xlsfileDAO
	$maBD = new MaBdDao( MaBD::getInstance () );
	
	// Suppretion de toutes les lignes de la table
	$maBD->dropALL ();
	
	// Recherche du dernier fichier excel en date et insertion dans la base de donnée
	$tabForDb = [];
	$tabForDb = recupererLigneExcel ( recupererDernierFichier ( "W:\\CHARGE_SAP\\Extraction_OF" ) );
	foreach ( $tabForDb as $key => $value ) {
		$maBD->insert($value);
	}
?>
