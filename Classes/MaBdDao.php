<?php
	/*
	 * Une class qui va permettre d'interréagir avec la base de donnée
	 */
	class MaBdDao extends DAO {
		public function getOne($key) {
			$stmt = $this->pdo->prepare ( 'SELECT codeArticle FROM iprtable WHERE iprCode = ?' );
			$stmt->execute ( array (
					$key 
			) );
			$row = $stmt->fetch ( PDO::FETCH_ASSOC );
			return $row;
		}
		
		public function insert($obj) {
			$stmt = $this->pdo->prepare ( 'INSERT INTO iprtable (iprCode, codeArticle) VALUES (?, ?)' );
			$res = $stmt->execute ( array (
					$obj ['ipr'],
					$obj ['article'],
			) );
			return $res;
		}
		
		public function dropALL() {
			$stmt = $this->pdo->prepare ( 'DELETE FROM iprtable' );
			$res = $stmt->execute ();
			return $res;
		}
	}
?>
