<?php
	function __autoload($class) {
		require_once "Classes/$class.php";
	}
	require_once "Classes/transfertdonne.php";
	require_once "Classes/xlsfileDAO.php";
	require_once "Classes/PHPExcel.php";
	
	// Instanciation d'un objet xlsfileDAO
	$maBD = new xlsfileDAO ( MaBD::getInstance () );
	
	// Suppretion de toutes les lignes de la table
	$maBD->dropALL ();
	
	// Recherche du dernier fichier excel en date et insertion dans la base de donnée
	$tabForDb = recupererLigneExcel ( recupererDernierFichier ( "W:\\CHARGE_SAP\\Extraction_OF" ) );
	foreach ( $tabForDb as $key => $value ) {
		$maBD->insert ( $value );
	}
?>
