<?php
  require_once "DAO.php";
  require_once "MaBD.php";
  require_once "bdBtnDAO.php";

  $maBD = new bdBtnDAO( MaBD::getInstance () );

  if (isset ( $_GET ["legende"]) && isset ( $_GET ["nomfichier"]) && isset ( $_GET ["url"])) {
		$value = array('legende'=>$_GET ["legende"], 'nomfichier'=>$_GET ["nomfichier"], 'url'=>$_GET ["url"]);
	} else {
		echo "ERROR";
	}
  $res = $maBD->insert($value);
  echo $res

 ?>
