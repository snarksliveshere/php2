<?php
require __DIR__.'/autoload.php';
//$users = \App\Models\User::findAll();
//$users = \App\Models\User::findById(2);
$news = \App\Models\News::findAll();
include __DIR__.'/App/Views/News.php';

$user = new \App\Models\User();
$user->name = 'Johns';
$user->email = 'johndos@doe.eu';
$user->update(3);



