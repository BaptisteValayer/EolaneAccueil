<?php
  require_once "DAO.php";
  require_once "MaBD.php";
  require_once "bdMessageDAO.php";

  $maBD = new bdMessageDAO( MaBD::getInstance () );

  if (isset ( $_GET ["id"] )) {
		$ID = $_GET ["id"];
	} else {
		echo "ERROR";
	}

  $res = $maBD->dropMsg($ID);

  return $res

 ?>
