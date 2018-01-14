<?php
require __DIR__.'/../autoload.php';
$url = $_SERVER['REQUEST_URI'];
// далее разобрать, какой адрес ввел пользователь и какой контроллер action вызывать
$controller = new \App\Controllers\Admin();
$action = $_GET['action'] ?: 'Index';
$controller->action($action);