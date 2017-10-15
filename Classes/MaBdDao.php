<?php
	/*
	 * Une class qui va permettre d'interr�agir avec la base de donn�e
	 */
	class MaBdDao extends DAO {
		protected $table = "iprtable";

		public function getOneArticle($key) {
			$stmt = $this->pdo->prepare ( "SELECT article FROM $this->table WHERE of = ?" );
			$stmt->execute ( array (
					$key
			) );
			$row = $stmt->fetch ( PDO::FETCH_ASSOC );
			return $row;
		}

		public function dropALL() {
			$stmt = $this->pdo->prepare ( "DELETE FROM $this->table" );
			$res = $stmt->execute ();
			return $this->table;
		}

	}
?>
