<?php

class bdMessageDAO extends DAO {
  protected $table = "message";

  public function getAllMessage() {
    $stmt = $this->pdo->prepare("SELECT * FROM $this->table ORDER BY dateFin");
    $stmt->execute();
    $res = array();
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){
        $res[] = $row;
    }
    echo json_encode($res);
  }

  public function dropDate() {
    $stmt = $this->pdo->prepare ( "DELETE FROM $this->table WHERE dateFin!='9999-12-31' && DATE_ADD(dateFin, INTERVAL 1 DAY)<now()" );
    $res = $stmt->execute ();
    return $res;
  }

  public function dropMsg($id) {
    $stmt = $this->pdo->prepare ( "DELETE FROM $this->table WHERE id=?");
    $res = $stmt->execute (array ($id));
    return $res;
  }
}
?>
