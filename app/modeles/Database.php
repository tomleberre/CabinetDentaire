<?php

class Database {
    private $host = 'localhost';
    private $dbname = 'cabinet_dentaire';
    private $username = 'root';
    private $password = '';
    private $pdo;

    public function getConnection() {
        try {
            $this->pdo = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname;charset=utf8",
                $this->username,
                $this->password
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }
}