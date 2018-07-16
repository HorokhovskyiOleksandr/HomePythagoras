<?php

require_once "../config/db.php";



class budgetAjax extends db {


    public function set($array) {
        $pdo = $this->connect();

        if(isset($array['budget']) && !empty($array['budget'])) {
            $obj = $pdo->prepare("INSERT INTO salary (summ) VALUES (?)");
            $obj->bindParam(1, $array['budget']);
            $res = $obj->execute();
        } else {
            echo "bugget dont write";
        }

        if($res) {
            foreach ($array as $key => $val) {
                if ($key != 'budget') {
                    if (empty($val)) {
                        $val = 0;
                    }
                    $obj2 = $pdo->prepare("INSERT INTO budget (category,summ) VALUES (?,?)");
                    $obj2->bindParam(1, $key);
                    $obj2->bindParam(2, $val);
                    $obj2->execute();

                }
            }
        } else {
            echo "error";
        }
    }

}


if(isset($_POST['budget']) && !empty($_POST['budget'])) {
    $budget = new budgetAjax();
    $budget->set($_POST);
}


//print_r($_POST);
/*
 * [budget] => 5000
    [deposit] =>
    [loan] =>
    [shopping] => 45
    [Communal] => 45
    [food] => 45
    [vehicle] => 45
    [Entertainment] =>
    [Medicine] =>
    [small] =>
 * */