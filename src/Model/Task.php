<?php

require_once __DIR__ . "/../Database.php";

class Task extends  Database{

    public function getAll(){
       $sql = "SELECT * FROM tache ORDER BY id ASC" ;
       $stmt = $this->connect()->query($sql);
       return $stmt->fetchAll();
    }
    
    
    
}