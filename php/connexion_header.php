<?php
    session_start();
    require_once '../persistance/DialogueBD.php';
    $bd = new DialogueBD();
    $user=null;
    if(!isset($_SESSION["connected"]) || $_SESSION["connected"]==false ){
        $_SESSION["user_found"]=false;
        $_SESSION["connected"]=false;
        if (isset($_POST['uname']) && isset($_POST['psw']))
            $user = $bd->getUser(htmlspecialchars($_POST['uname']),htmlspecialchars($_POST['psw']));
        /*
         * On regarde si l'utilisateur est présent dans la base de donnée.
         */
        if ($user !=null && count($user[0])>1)
        {
            $_SESSION['uname'] = $_POST['uname'];
            $_SESSION['psw'] = $_POST['psw'];
            $_SESSION["connected"]=true;
            $_SESSION["user_found"]=true;
        }
    }
    /*
     On vérifie qu'on est bien connecté.
     */
    if ($_SESSION["connected"]==false){
        header('location:../index.php');
        exit();
    }
?>
