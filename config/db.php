<?php


class db
{

    protected function connect() {
        try {
            $pdo = new PDO("mysql:host=localhost; dbname=project", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e) {
           echo $e->getMessage();
        }
    }


}


?>