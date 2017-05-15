<?php

class bdBtnDAO extends DAO {
  protected $table = "btn";

  public function getAllBtn() {
    $stmt = $this->pdo->prepare("SELECT * FROM $this->table");
    $stmt->execute();
    $res = array();
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){
        $res[] = $row;
    }
    echo json_encode($res);
  }

  public function dropBtn($id) {
    $stmt = $this->pdo->prepare ( "DELETE FROM $this->table WHERE id=?");
    $res = $stmt->execute (array ($id));
    return $res;
  }
}
?>
