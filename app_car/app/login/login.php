<?php

$dirProject = $_SERVER['DOCUMENT_ROOT'] . '/app_car/';
require $dirProject . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['pass']);

if ($email && $senha) {
    $senha = sha1($senha);
    $queryLogin = $DB->query("SELECT id FROM user WHERE email = '$email' AND senha = '$senha'");
    if ($queryLogin->num_rows == 1) {
        include '../../classes/session/Session.php';
        Session::initSession($email);
        header('Location: ../../index.php');
    } else {
        header('Location: ../../login.php?erro_login=true');
    }
}