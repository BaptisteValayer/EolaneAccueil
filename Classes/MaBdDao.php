<?php
	/*
	 * Une class qui va permettre d'interr�agir avec la base de donn�e
	 */
	class MaBdDao extends DAO {
		protected $table = "iprtable";

		public function getOneArticle($key) {
			$stmt = $this->pdo->prepare ( "SELECT article FROM $this->table WHERE ipr = ?" );
			$stmt->execute ( array (
					$key
			) );
			$row = $stmt->fetch ( PDO::FETCH_ASSOC );
			return $row;
		}

		public function insert($obj) {
			$fieldList = "";
			$valueList = array();
			$textRequete = "";

			foreach ($obj as $key => $value) {
				$fieldList = $fieldList."$key, ";
				array_push($valueList,$value);
				$textRequete = $textRequete."?, ";
			}
			$fieldList = substr($fieldList, 0, -2);
      $textRequete = substr($textRequete, 0, -2);

			$stmt = $this->pdo->prepare ( "INSERT INTO $this->table ($fieldList) VALUES ($textRequete)" );
			$res = $stmt->execute ($valueList);
		}

		public function dropALL() {
			$stmt = $this->pdo->prepare ( "DELETE FROM $this->table" );
			$res = $stmt->execute ();
			return $this->table;
		}
	}
?>
