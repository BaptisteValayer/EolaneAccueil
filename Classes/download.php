<?php
	/*
	 * On test si les donn�es trasmisent par l'url existe
	 */
	if (isset ( $_GET ["filename"] ) && isset ( $_GET ["path"] )) {
		if(isset ($_GET["unslipt"])){
			$Fichier_a_telecharger = utf8_decode($_GET ["filename"]);
			$chemin = utf8_decode($_GET ["path"]);
		}
		else {
			$Fichier_a_telecharger = utf8_decode(str_replace("_",'\e',$_GET ["filename"]));
			$cheminSplited = preg_split("/[S:]./",$_GET ["path"]);
			//$chemin = "\\\\val-fs01\\Services".$cheminSplited[1];
			$chemin = utf8_decode("\\\\val-fs01\\Services".$cheminSplited[count($cheminSplited)-1]);
		}
	} else {
		return "ERROR";
	}

	/*
	 * Test de l'extension du nom de fichier transmit l'utiliser dans le header
	 * qui permettra de telecharger sans corruption du fichier
	 */
	switch (strrchr ( basename ( $Fichier_a_telecharger ), "." )) {
		case ".docx" :
			$type = "application/msword";
			break;
		case ".doc" :
			$type = "application/msword";
			break;
		case ".xlsx" :
			$type = "application/vnd.ms-excel";
			break;
		case ".xls" :
			$type = "application/vnd.ms-excel";
			break;
		case ".pdf" :
			$type = "application/pdf";
			break;
	}
	/*
	 * Diff�rente information pour t�l�charger le fichier sans probl�me
	 */
	header ( "Content-disposition: attachment; filename=\"$Fichier_a_telecharger\"");
	header ( "Content-Type: $type; charset=utf-8" );

	readfile ( $chemin.$Fichier_a_telecharger);
?>
