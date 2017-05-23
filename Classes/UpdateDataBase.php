<?php
	require_once "PHPExcel.php";
	require_once "transfertdonne.php";
	require_once "DAO.php";
	require_once "MaBD.php";
	require_once "MaBdDao.php";
	require_once "..\\init\\init.php";


	// Instanciation d'un objet xlsfileDAO
	$maBD = new MaBdDao( MaBD::getInstance () );
	$ExtractionPath = getExtractionPath();
	// Suppretion de toutes les lignes de la table
	$maBD->dropALL();
	// Recherche du dernier fichier excel en date et insertion dans la base de donn�e
	$tabForDb = [];
	$tabForDb = recupererLigneExcel ( recupererDernierFichier ( $ExtractionPath ) );
	foreach ( $tabForDb as $key => $value ) {
		$res = $maBD->insert($value);
	}
?>
