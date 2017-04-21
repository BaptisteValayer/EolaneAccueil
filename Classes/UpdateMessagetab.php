<?php
  require_once "MaBD.php";

  $maBD = new MaBdDao( MaBD::getInstance () );

  $maBD->dropDate();
  $res = $maBD->getAll( $IPR );


 ?>
