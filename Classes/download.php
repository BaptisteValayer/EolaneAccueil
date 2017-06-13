<?php
	/*
	 * On test si les donn�es trasmisent par l'url existe
	 */
	if (isset ( $_GET ["filename"] ) && isset ( $_GET ["path"] )) {
			$Fichier_a_telecharger = utf8_decode($_GET ["filename"]);
			$chemin = utf8_decode($_GET ["path"]);
	} else {
		return "ERROR";
	}

	/*
	 * Diff�rente information pour t�l�charger le fichier sans probl�me
	 */
	$handle = fopen("../Bat/RaccourciFiche.bat","w");
        $base = "explorer ";
        fwrite($handle,$base.$chemin.$Fichier_a_telecharger);
        fclose($handle);
	header ( "Content-disposition: attachment; filename=RaccourciFiche.bat");
	header ( "Content-Type: application/x-msdos-program; charset=utf-8" );

	$download_rate = 200;
	flush();
  	$file = fopen("../Bat/RaccourciFiche.bat", "r");
	print fread($file, round($download_rate * 1024));
	flush();
	fclose($file);
?>
