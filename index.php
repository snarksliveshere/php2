<?php
require __DIR__.'/autoload.php';
PHP_Timer::start();
$url = $_SERVER['REQUEST_URI'];
// далее разобрать, какой адрес ввел пользователь и какой контроллер action вызывать
$controller = new \App\Controllers\News();
$action = $_GET['action'] ?: 'Index';
try
{
    $controller->action($action);
}
catch (\App\Exceptions\Core $e)
{
    echo 'возникло исключение приложения: '.$e->getMessage();
}
catch (\App\Exceptions\Db $e)
{
    echo 'что-то не то с базой: '.$e->myMessage();
}
catch (\App\Exceptions\Error404 $e)
{
   // echo 'возникло исключение приложения: '.$e->myMessage();
    $view = new \App\View();
    $view->display(__DIR__.'/App/templates/error404.php');

}




$time = PHP_Timer::stop();
print PHP_Timer::resourceUsage();







