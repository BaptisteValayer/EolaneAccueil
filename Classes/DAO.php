<?php
/* Classe abstraite pour l'accès aux données d'une base
 */

abstract class DAO {
    const UNKNOWN_ID = -1; // Identifiant non déterminé
    protected $pdo; // Objet pdo pour l'accès à la table

    // Le constructeur reçoit l'objet PDO contenant la connexion
    public function __construct(PDO $connector) { $this->pdo = $connector; }

    // Récupération d'un objet dont on donne l'identifiant
    abstract public function getOne($id);


    // Ajout de l'objet dans la base
    abstract public function insert($obj);

    abstract public function dropALL();

    // Mise à jour de l'objet dans la base
    //abstract public function update($obj);

    // Sauvegarde de l'objet $obj : regroupement de insert et update
    //     clé == UNKNOWN_ID ==> INSERT
    //     clé != UNKNOWN_ID ==> UPDATE
    // À redéfinir éventuellement dans une sous-classe
    public function save($obj) {
       throw new Exception("Unimplemented method: save");
    }
}
?>
