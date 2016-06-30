<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 12/06/2016
 * Time: 04:08 PM
 */
    function logout(){
        session_start();

        $_SESSION = [];

        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(), '', time()-42000,'/');
        }

        session_destroy();
        header('location: index.php');

    }

?>