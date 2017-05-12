<?php
  require_once "DAO.php";
  require_once "MaBD.php";
  require_once "bdBtnDAO.php";

  $maBD = new bdBtnDAO( MaBD::getInstance () );

  $res = $maBD->getAllMessage();

  return $res

 ?>
