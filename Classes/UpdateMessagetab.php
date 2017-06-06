<?php
  require_once ("DAO.php");
  require_once ("MaBD.php");
  require_once ("BdMessageDAO.php");

  $maBD = new bdMessageDAO( MaBD::getInstance () );

  $res = $maBD->getAllMessage();

  return $res

 ?>
