<?php
require_once "DAO.php";
require_once "MaBD.php";
require_once "bdMessageDAO.php";

$maBD = new bdMessageDAO( MaBD::getInstance () );

$res = $maBD->dropDate();

echo "Fini"
 ?>
