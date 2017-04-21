<?php

public class bdMessageDAO extends DAO {
  protected $table = "message";

  public function insert($obj) {
    $stmt = $this->pdo->prepare ( 'INSERT INTO message (message, dateFin) VALUES (?, ?)' );
    $res = $stmt->execute ( array (
        $obj['messageText'],
        $obj['dateFin'],
    ) );
    return $res;
  }
  
  public function getAllMessage() {
    $stmt = $this->pdo->prepare('SELECT * FROM $this->table ORDER BY DateFin ASC');
    $stmt->execute(array($equipe));
    $res = array();
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row)
        $res[] = $row;
    return $res;
  }

  public function dropDate() {
    $stmt = $this->pdo->prepare ( 'DELETE FROM message WHERE DATE_ADD(dateFin, INTERVAL 1 DAY)<now()' );
    $res = $stmt->execute ();
    return $res;
  }

  public function dropMsg($id) {
    $stmt = $this->pdo->prepare ( 'DELETE FROM message WHERE id=?');
    $res = $stmt->execute (array ($id));
    return $res;
  }
}
?>
