<?php

require __DIR__.'/autoload.php';
$news = \App\Models\News::findAll();
var_dump($news);

var_dump($news[0]->author);