<?php

$dirProject = $_SERVER['DOCUMENT_ROOT'] . '/app_car/';
require $dirProject . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$id = addslashes($_GET['id']);
$MySQL->deleteByID($DB, 'cars', $id);
header('Location: ../list.php');