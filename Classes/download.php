<?php
	/*
	 * On test si les données trasmisent par l'url existe
	 */
	if (isset ( $_GET ["filename"] ) && isset ( $_GET ["path"] )) {
		$Fichier_a_telecharger = $_GET ["filename"];
		$chemin = $_GET ["path"];
	} else {
		return "ERROR";
	}
	
	/*
	 * Test de l'extension du nom de fichier transmit l'utiliser dans le header
	 * qui permettra de telecharger sans corruption du fichier
	 */
	switch (strrchr ( basename ( $Fichier_a_telecharger ), "." )) {
		case ".docx" :
			$type = "application/docx";
			break;
		case ".doc" :
			$type = "application/doc";
			break;
		case ".xlsx" :
			$type = "application/xlsx";
			break;
		case ".xls" :
			$type = "application/xls";
			break;
		case ".pdf" :
			$type = "application/pdf";
			break;
	}
	
	/*
	 * Différente information pour télécharger le fichier sans problème
	 */
	header ( "Content-disposition: attachment; filename=$Fichier_a_telecharger" );
	header ( "Content-Type: application/force-download" );
	header ( "Content-Transfer-Encoding: $type\n" ); // Surtout ne pas enlever le \n
	header ( "Content-Length: " . filesize ( $chemin . $Fichier_a_telecharger ) );
	header ( "Pragma: no-cache" );
	header ( "Cache-Control: must-revalidate, post-check=0, pre-check=0, public" );
	header ( "Expires: 0" );
	
	readfile ( $chemin . $Fichier_a_telecharger );
?>
