<?php

require_once "../config/db.php";


class expenses extends db {
    public function set($array) {
        $pdo = $this->connect();
        $obj = $pdo->prepare("INSERT INTO expenses (category, summ) VALUES (?,?)");
        $obj->bindParam(1,$array['category']);
        $obj->bindParam(2,$array['summ']);
        $obj->execute();
    }
}

if(isset($_POST['summ'])) {
    $expenses = new expenses();
    $expenses->set($_POST);
}