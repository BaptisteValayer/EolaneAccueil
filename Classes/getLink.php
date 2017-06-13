<?php

	require_once "transfertdonne.php";
	require_once "../init/init.php";

	/*
	 * Test si les donn�es trasmisent par l'url existe
	 */
	if (isset ( $_GET ['codeArticle'] )) {
		$codeArticle = $_GET ['codeArticle'];
	} else {
		return "ERROR";
	}
	$result=array();
	$Paths=getALLPath();
	$exist=false;

	for ($i=0; $i < count($Paths); $i++) {
		if(($file = IsExisting( $codeArticle,$Paths[$i]['path'] )) !==0 ){
			array_push($result, $Paths[$i]['path']."/".$file );
			$exist=true;
		}
	}
	if($exist == true) {
		echo json_encode($result);
	}
	else {
		return false;
	}
?>
