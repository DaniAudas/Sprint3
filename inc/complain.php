<?php
/**
 * Created by PhpStorm.
 * User: Dani
 * Date: 23/06/2016
 * Time: 10:35 AM
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
    $id_queja = uniqid('queja_');
    setlocale(LC_ALL, "0");
    $fecha = date("y, m, d");
    $info = ["id_queja" => $id_queja,"tipo" => $_POST['problema'], "descripcion" => $_POST['descripcion'], $fecha];
    $table = 'quejas_profesor';
    $registry = new Database(DB_DRIVER.':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $results = $registry->insert($table, $info);


}else {
    header('location:./error/message/5050');
    exit;
}