<?php

class login extends db{

    public function setUser($email,$password) {
        $pdo = $this->connect();

        $set = $pdo->prepare("SELECT * FROM users WHERE email=?");
        $set->bindParam(1,$email);
        $set->execute();
        $array = $set->fetch(PDO::FETCH_ASSOC);

        if(!empty($array['email'])) {
             if(password_verify($password,$array['password'])) {
                 $_SESSION['login'] = true;
                 $_SESSION['username'] = $array['name'];
                 $_SESSION['useremail'] = $array['email'];
                 return true;
             } else {
                 return false;
             }
        } else {
            return false;
        }
    }

}



?>