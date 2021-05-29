<?php

$dirProjeto = $_SERVER['DOCUMENT_ROOT'] . '/app_car/';
require $dirProjeto . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$id  = addslashes($_POST['id']);
$marca = addslashes($_POST['marca']);
$modelo = addslashes($_POST['modelo']);
$ano = addslashes($_POST['ano']);
$valor = addslashes($_POST['valor']);
$obs = addslashes($_POST['obs']);

$DB->query("UPDATE cars SET marca = '$marca', modelo = '$modelo', ano = '$ano', valor = '$valor', obs = '$obs' WHERE id = $id");

if ($DB->affected_rows == 1){
    header('Location: ../list.php');
}else{
    header('Location: ../list.php');
}
