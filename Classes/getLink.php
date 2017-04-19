<?php
	
	require_once "transfertdonne.php";
	
	/*
	 * Test si les données trasmisent par l'url existe
	 */
	if (isset ( $_GET ['codeArticle'] )) {
		$codeArticle = $_GET ['codeArticle'];
	} else {
		return "ERROR";
	}
	
	//Premier dossier dans lequel on recherche la fiche produit
	$directoryIprValide = '\\\\val-fs01\\Services\Methodes Production\0- IPR VALIDE';
	//Deuxième dossier dans lequel on recherche la fiche produit
	$directoryIprAutorisee = '\\\\val-fs01\\Services\Methodes Production\1- IPR AUTORISEES';
	
	/*
	 * Test de l'existence d'un fichier avec $codeArticle dans son nom dans le dossier $directoryIprValide
	 */
	$file = IsExisting ( $codeArticle, $directoryIprValide );
	if ($file!== 0) {
		return "file:\\\\\\S:\\Methodes Production\\0- IPR VALIDE\\".$file;
	}
	
	/*
	 * Test de l'existence d'un fichier avec $codeArticle dans son nom dans le dossier $directoryIprAutorisee
	 */
	$file= IsExisting ( $codeArticle, $directoryIprAutorisee );
	if ($file!== 0) {
		return "file:\\\\\\S:\\Methodes Production\\1- IPR AUTORISEES\\".$file;
	}
	return $file;

?>
