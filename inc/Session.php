<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/06/15
 * Time: 14:49
 */

session_start();

function confirm_logged_in(){
    if (!isset($_SESSION['user'])){
        header('location:message.php');
        exit;
    }
}
?>