<?php

class logout {
    public function exit() {
        unset( $_SESSION['login']);
        unset( $_SESSION['username']);
        unset( $_SESSION['useremail']);

        header('Location: http://'.$_SERVER{'HTTP_HOST'});
    }
}



?>