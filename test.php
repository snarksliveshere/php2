<?php

require __DIR__.'/autoload.php';
$view = new \App\View();
$view->news = \App\Models\News::findAll();
$content_news = $view->render(__DIR__.'/App/templates/news.php');
echo $content_news;