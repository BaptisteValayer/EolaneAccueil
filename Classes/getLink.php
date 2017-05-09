<?php

	require_once "transfertdonne.php";

	/*
	 * Test si les donn�es trasmisent par l'url existe
	 */
	if (isset ( $_GET ['codeArticle'] )) {
		$codeArticle = $_GET ['codeArticle'];
	} else {
		return "ERROR";
	}

	//Premier dossier dans lequel on recherche la fiche produit
	$directoryIprValide = $_COOKIE['IprValide'];
	//Deuxi�me dossier dans lequel on recherche la fiche produit
	$directoryIprAutorisee = $_COOKIE['IprAutorise'];

	/*
	 * Test de l'existence d'un fichier avec $codeArticle dans son nom dans le dossier $directoryIprValide
	 */
	//$file = IsExisting ( $codeArticle, $directoryIprValide );
	if ( ($file = IsExisting ( $codeArticle, $directoryIprValide )) !== 0) {
		echo "file:\\\\\\S:\\Methodes Production\\0- IPR VALIDE\\".$file;
	}
	/*
	* Test de l'existence d'un fichier avec $codeArticle dans son nom dans le dossier $directoryIprAutorisee
	*/
	else if ( ($file= IsExisting ( $codeArticle, $directoryIprAutorisee )) !== 0) {
			echo "file:\\\\\\S:\\Methodes Production\\1- IPR AUTORISEES\\".$file;

	}
	else {
		echo $file;
	}
?>
