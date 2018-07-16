<?php

class register extends db{


    public function setReg($email,$password,$name) {
         $pdo = $this->connect();

         $hash = password_hash($password, PASSWORD_DEFAULT );

         $set = $pdo->prepare("INSERT INTO users (email,name,password) VALUES (?,?,?)");
         $set->bindParam(1,$email);
         $set->bindParam(2,$name);
         $set->bindParam(3,$hash);
         $res = $set->execute();
         if($res) {
             return true;
         } else {
             return false;
         }

    }
}




?>