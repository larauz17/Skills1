<?php

namespace Daw;

class Users {

    public $sql;

    public function __construct($user, $pass, $db, $host){

        $dsn = "mysql:dbname={$db};host={$host}";
        try {
            $this->sql = new \PDO($dsn, $user, $pass);
        } catch (\PDOException $e) {
            die('Ha fallat la connexió: ' . $e->getMessage());
        }
    }

    public function adduser($nom, $cognom, $datanaix, $adreca) {
        
        // Si el correo electrónico no está registrado, procede con la inserción
        $insertStmt = $this->sql->prepare('INSERT INTO persones (nom,cognoms,datanaixement,adreca) VALUES (:nom, :cognom, :datanaix, :adreca);');
        $result = $insertStmt->execute([
            ':nom' => $nom,
            ':cognom' => $cognom,
            ':datanaix' => $datanaix,
            ':adreca' => $adreca
        ]);
    
        // Obtén el ID del usuario recién insertado
        $lastInsertId = $this->sql->lastInsertId();

        return $lastInsertId;
    }
    

       

    public function getAllUsers(){
        $stm = $this->sql->prepare("select * from persones");
        $stm->execute();
        
        $persones = array();
        while ($persona = $stm->fetch(\PDO::FETCH_ASSOC)) {
            $persones[] = $persona;
        }
        return $persones;
    }

}