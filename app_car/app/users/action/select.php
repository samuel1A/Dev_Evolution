<?php

$dirProject = $_SERVER['DOCUMENT_ROOT'] . '/app_car/';
require $dirProject . 'classes/db/MySQL.php';

$MySQL = new MySQL();
$DB = $MySQL->connectDB();

$usuarios = $MySQL->getAll($DB, 'user');