<?php

require_once __DIR__ . "/../Database.php";

class Task extends  Database{

    public function getAll(){
       $sql = "SELECT * FROM tache ORDER BY id ASC" ;
       $stmt = $this->connect()->query($sql);
       return $stmt->fetchAll();
    }

    public function add($title, $contenue){
      $sql = "INSERT INTO tache (nom, contenue) VALUES (?, ?)" ;
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$title, $contenue]);
    }

    public function complete($id){
        $sql = "UPDATE tache SET statut = 1 WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    
    public function delete($id){
        $sql = "DELETE FROM tache WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    
}