<?php
   	require_once "transfertdonne.php";
	require_once "DAO.php";
	require_once "MaBD.php";
	require_once "MaBdDao.php";
	
   	$maBD = new MaBdDao( MaBD::getInstance () );
   	
   	$maBD->updateColums("ipr","of","varchar(30) NOT NULL");
?>