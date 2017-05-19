<?php

	require_once "transfertdonne.php";
	require_once "..\\init\\init.php";

	/*
	 * Test si les donn�es trasmisent par l'url existe
	 */
	/*if (isset ( $_GET ['codeArticle'] )) {
		$codeArticle = $_GET ['codeArticle'];
	} else {
		return "ERROR";
	}*/
	$codeArticle="B03-0090A";
	$result=array();
	$Paths=getALLPath();
	$exist=false;

	for ($i=0; $i < count($Paths); $i++) {
		if ($file = IsExisting ( $codeArticle, $Paths[$i]['path']) !== 0){
			echo "oui";
		}
		else {
			echo "non";
		}
	}

	/*foreach ($path as $key => $value) {
		if ( ($file = IsExisting ( $codeArticle, $path )) !== 0) {
			array_push($tab,"file:\\\\\\S:\\Methodes Production\\0- IPR VALIDE\\".$file);
		}
	}
	/*
	 * Test de l'existence d'un fichier avec $codeArticle dans son nom dans le dossier $directoryIprValide
	 */
	//$file = IsExisting ( $codeArticle, $directoryIprValide );
	/*if ( ($file = IsExisting ( $codeArticle, $directoryIprValide )) !== 0) {
		echo "file:\\\\\\S:\\Methodes Production\\0- IPR VALIDE\\".$file;
	}
	/*
	* Test de l'existence d'un fichier avec $codeArticle dans son nom dans le dossier $directoryIprAutorisee
	*/
	/*else if ( ($file= IsExisting ( $codeArticle, $directoryIprAutorisee )) !== 0) {
			echo "file:\\\\\\S:\\Methodes Production\\1- IPR AUTORISEES\\".$file;

	}
	else {
		echo $file;
	}*/
?>
