<?php

require __DIR__.'/autoload.php';

$single = \App\Singleton::instance();
$single->counter =1;
var_dump($single);
?>