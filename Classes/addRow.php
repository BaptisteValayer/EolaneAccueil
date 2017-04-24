<?php
  require_once "DAO.php";
  require_once "MaBD.php";
  require_once "bdMessageDAO.php";

  $maBD = new bdMessageDAO( MaBD::getInstance () );

  if (isset ( $_GET ["message"]) && isset ( $_GET ["dateFin"])) {
    if ($_GET ["dateFin"]=="Sans limite" || $_GET ["dateFin"]==null) { $dateFinText="9999-12-31"; }
    else{
      $splited = preg_split("/[\/]+/",$_GET ["dateFin"]);
      $dateFinText = $splited[2]."-".$splited[0]."-".$splited[1];
    };
		$value = array('message'=>$_GET ["message"], 'dateFin'=> $dateFinText);
	} else {
		echo "ERROR";
	}
  $res = $maBD->insert($value);
  echo $res

 ?>
