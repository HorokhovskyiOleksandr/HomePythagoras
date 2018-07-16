<?php


require_once "../config/db.php";



class statistics extends db{

    public function getstat() {
        $pdo = $this->connect();
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT * FROM expenses WHERE date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($array);
    }

}


$stat = new statistics();
$stat->getstat();



?>