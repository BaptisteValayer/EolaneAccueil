<?php
  require_once "DAO.php";
  require_once "MaBD.php";
  require_once "bdBtnDAO.php";

  $maBD = new bdBtnDAO( MaBD::getInstance () );

  if (isset ( $_GET ["id"] )) {
		$ID = $_GET ["id"];
	} else {
		echo "ERROR";
	}

  $res = $maBD->dropBtn($ID);

  return $res

 ?>
