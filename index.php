<?php
if(!session_start()){
	session_start();
}
ob_start();

require_once "config/db.php";



require_once "vendor/autoload.php";

$loader = new Twig_Loader_Filesystem('public');
$twig = new Twig_Environment($loader);


//echo $template->render(array('the' => 'variables', 'go' => 'here'));

spl_autoload_register(function($class) {
	require_once "classes/".$class.".php";
});



switch($_GET['page']){
	case"register":
	     echo $twig->render("register.html");

         if(isset($_POST['register'])) {
             $register = new register();
             $res = $register->setReg($_POST['email'], $_POST['password'], $_POST['name']);

             if($res) {
                 echo "<script>alert('вы зарегистрированны')</script>";
             } else {
                 echo "<script>alert('ошибка регистрации')</script>";
             }
         }

	break;


    case "exit":
         $logout = new logout();
         $logout->exit();
    break;

    case"budget":
        if(isset($_SESSION['login']) && $_SESSION['login']) {
            echo $twig->render("budget.html");
        } else {
            header('Location: http://'.$_SERVER['HTTP_HOST']);
        }
    break;

    case"statistics":
        if(isset($_SESSION['login']) && $_SESSION['login']) {
            echo $twig->render("statistics.html");
        } else {
            header('Location: http://'.$_SERVER['HTTP_HOST']);
        }
    break;

	default:
	  if(isset($_SESSION['login']) && $_SESSION['login']) {
		echo $twig->render("main.html");
	  } else {
		echo $twig->render("login.html");

		if(isset($_POST['login'])){
		    $login = new login();
		    $res = $login->setUser($_POST['email'],$_POST['password']);

		    if($res) {
		        header('Location: http://'.$_SERVER['HTTP_HOST']);
            } else {
		        echo "<script>alert('ошибка авторизации')</script>";
            }
        }

	  }
	    
	break;

}
















?>