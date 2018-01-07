<?php
require __DIR__.'/autoload.php';

$view = new \App\View();
$view->title = 'Simple template';
$user = new \App\Models\User();
$view->users = \App\Models\User::findAll();
$content = $view->render(__DIR__.'/App/templates/index.php');
// вот примерно за этим
// можно сделать специальные теги вставить, а потом - сделать визуальный редактор - ckeditor к примеру
// или когда страницу сайтов собираем из нескольких кусочков - для каждого кусочка отдельный объект view делает свою работу а потом собирается
echo str_replace('@','!!!',$content);
echo count($view);



// CRUD
//$users = \App\Models\User::findAll();
//$users = \App\Models\User::findById(2);
//$news = \App\Models\News::findAll();
//include __DIR__.'/App/Views/News.php';
//
//$user = new \App\Models\User();
//$user->name = 'Johns';
//$user->email = 'johndos@doe.eu';
//$user->update(3);




