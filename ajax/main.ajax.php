<?php

require_once "../config/db.php";



class main extends db {

    public function samecat() {
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT * FROM expenses WHERE category = ?");
        $pdo2->bindParam(1,$_POST['information']);
        $pdo2->execute();
        $arr = $pdo2->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($arr);
    }


    public function spend() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();
        echo $array['sum'];

    }


    public function left() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();
        $array['sum'];

        $pdo3 = $pdo->prepare("SELECT * FROM salary WHERE date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        echo $array2['summ'] - $array['sum'];
    }


    public function deposit() {
        $date = date("Y-m");
        $pdo = $this->connect();

        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE category IN('deposit') AND date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();


        $pdo3 = $pdo->prepare("SELECT * FROM budget WHERE category IN('deposit') AND date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        if($array2['summ'] - $array['sum'] >= 0) {
            echo 0;
        }
        else {
            echo 1;
        }

    }
    public function loan() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE category IN('loan') AND date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();


        $pdo3 = $pdo->prepare("SELECT * FROM budget WHERE category IN('loan') AND date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        if($array2['summ'] - $array['sum'] >= 0) {
            echo 0;
        }
        else {
            echo 1;
        }
    }




    public function shopping() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE category IN('shopping') AND date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();


        $pdo3 = $pdo->prepare("SELECT * FROM budget WHERE category IN('shopping') AND date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        if($array2['summ'] - $array['sum'] >= 0) {
            echo 0;
        }
        else {
            echo 1;
        }
    }





    public function communal() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE category IN('communal') AND date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();


        $pdo3 = $pdo->prepare("SELECT * FROM budget WHERE category IN('communal') AND date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        if($array2['summ'] - $array['sum'] >= 0) {
            echo 0;
        }
        else {
            echo 1;
        }
    }




    public function food() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE category IN('food') AND date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();


        $pdo3 = $pdo->prepare("SELECT * FROM budget WHERE category IN('food') AND date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        if($array2['summ'] - $array['sum'] >= 0) {
            echo 0;
        }
        else {
            echo 1;
        }
    }




    public function vehicle() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE category IN('vehicle') AND date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();


        $pdo3 = $pdo->prepare("SELECT * FROM budget WHERE category IN('vehicle') AND date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        if($array2['summ'] - $array['sum'] >= 0) {
            echo 0;
        }
        else {
            echo 1;
        }
    }




    public function entertainment() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE category IN('entertainment') AND date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();


        $pdo3 = $pdo->prepare("SELECT * FROM budget WHERE category IN('entertainment') AND date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        if($array2['summ'] - $array['sum'] >= 0) {
            echo 0;
        }
        else {
            echo 1;
        }
    }



    public function medicine() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE category IN('medicine') AND date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();


        $pdo3 = $pdo->prepare("SELECT * FROM budget WHERE category IN('medicine') AND date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        if($array2['summ'] - $array['sum'] >= 0) {
            echo 0;
        }
        else {
            echo 1;
        }
    }



    public function small() {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM expenses WHERE category IN('small') AND date LIKE '$date%'");
        $pdo2->execute();
        $array = $pdo2->fetch();


        $pdo3 = $pdo->prepare("SELECT * FROM budget WHERE category IN('small') AND date LIKE '$date%'");
        $pdo3->execute();
        $array2 = $pdo3->fetch();

        if($array2['summ'] - $array['sum'] >= 0) {
            echo 0;
        }
        else {
            echo 1;
        }
    }


    public function getBudget($cat) {
        $date = date("Y-m");
        $pdo = $this->connect();
        $pdo2 = $pdo->prepare("SELECT SUM(summ) as sum FROM budget WHERE category = ? AND date LIKE '$date%'");
        $pdo2->bindParam(1, $cat);
        $pdo2->execute();
        $array = $pdo2->fetch(PDO::FETCH_ASSOC);

        echo $array['sum'];

    }





}
$main = new main;


if(isset($_POST['budget'])) {
    $main->getBudget($_POST['budget']);
}

if(isset($_POST['deposit'])) {
    $main->deposit();
}
if(isset($_POST['loan'])) {
    $main->loan();
}
if(isset($_POST['shopping'])) {
    $main->shopping();
}
if(isset($_POST['communal'])) {
    $main->communal();
}
if(isset($_POST['food'])) {
    $main->food();
}
if(isset($_POST['vehicle'])) {
    $main->vehicle();
}
if(isset($_POST['entertainment'])) {
    $main->entertainment();
}
if(isset($_POST['medicine'])) {
    $main->medicine();
}
if(isset($_POST['small'])) {
    $main->small();
}




if(isset($_POST['spend'])) {
    $main->spend();
}

if(isset($_POST['left'])) {
    $main->left();
}


if(isset($_POST['information'])) {
    $main->samecat();
}




?>