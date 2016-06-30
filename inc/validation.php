<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 09/06/2016
 * Time: 02:52 PM
 */
require_once ('../inc/Session.php');
//print_r($_POST);
//include 'inc/Session.php';
function is_ajax()
{
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
try{
    require_once '../class/config.php';
    require_once '../class/database.php';
} catch (Exception $e) {
    echo $e->getMessage();
}
if(is_ajax()){
    $user = $_POST['userName'];
    $pass = $_POST['p'];
    //print_r($_POST);

    /*$options = array('cost' => 13);
    $pass = password_hash($pass, PASSWORD_DEFAULT, $options);*/

    $bind = [":id" => $user];
    $fields = 'pass';
    $table = 'administration';
    $where = array('username'=>':id');
    $registry = new Database(DB_DRIVER.':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $results = $registry->select($table, $fields, $where, $bind);

    if(count($results)>0){
        if(password_verify($pass,$results[0]['pass'])){
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            $arrayUser['authenticated'] = "true";
            echo json_encode($arrayUser);

        }else{
            $arrayUser['authenticated'] = "False";
            echo json_encode($arrayUser);
        }
    }
    else{
        $arrayUser['authenticated'] = "False";
        echo json_encode($arrayUser);
    }
}else {
    header('location:./error/message/5050');
    exit;
}

//echo json_encode($_POST);