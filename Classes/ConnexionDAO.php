<?php

/**
 * Class to test connexion access
 */
class connexionDAO extends DAO
{
  protected $table = "connexion";

  public function getOne($ndc,$mdp) {
    $stmt = $this->pdo->prepare ( "SELECT id FROM $this->table WHERE ndc=? AND mdp=?");
    $stmt->execute (array ($ndc,$mdp));
    $res = $stmt->fetch();
    return $res;
  }
}


 ?>
